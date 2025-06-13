<?php
session_start();
require_once __DIR__ . '../../config/database.php';

class Auth {
    private $db;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }
    
    public function login($username, $password) {
        try {
            $query = "SELECT * FROM admin WHERE username = ? AND status = 'aktif'";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$username]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($admin && password_verify($password, $admin['password'])) {
                // Update last login
                $updateQuery = "UPDATE admin SET last_login = NOW() WHERE id = ?";
                $updateStmt = $this->db->prepare($updateQuery);
                $updateStmt->execute([$admin['id']]);
                
                // Set session (tanpa role)
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_username'] = $admin['username'];
                $_SESSION['admin_nama'] = $admin['nama_lengkap'];
                $_SESSION['admin_email'] = $admin['email'];
                
                return [
                    'success' => true,
                    'message' => 'Login berhasil',
                    'redirect' => 'dashboard.php'
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Username atau password salah'
                ];
            }
        } catch(PDOException $e) {
            return [
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ];
        }
    }
    
    public function logout() {
        session_destroy();
        header("Location: login.php");
        exit();
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
    }
    
    public function requireLogin() {
        if (!$this->isLoggedIn()) {
            header("Location: login.php");
            exit();
        }
    }
    
    // Method untuk update profile admin
    public function updateProfile($id, $nama_lengkap, $email, $current_password = null, $new_password = null) {
        try {
            // Jika ingin ganti password
            if (!empty($current_password) && !empty($new_password)) {
                // Cek password lama
                $query = "SELECT password FROM admin WHERE id = ?";
                $stmt = $this->db->prepare($query);
                $stmt->execute([$id]);
                $admin = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if (!password_verify($current_password, $admin['password'])) {
                    return [
                        'success' => false,
                        'message' => 'Password lama tidak sesuai'
                    ];
                }
                
                // Update dengan password baru
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE admin SET nama_lengkap = ?, email = ?, password = ? WHERE id = ?";
                $stmt = $this->db->prepare($updateQuery);
                $stmt->execute([$nama_lengkap, $email, $hashed_password, $id]);
            } else {
                // Update tanpa password
                $updateQuery = "UPDATE admin SET nama_lengkap = ?, email = ? WHERE id = ?";
                $stmt = $this->db->prepare($updateQuery);
                $stmt->execute([$nama_lengkap, $email, $id]);
            }
            
            // Update session
            $_SESSION['admin_nama'] = $nama_lengkap;
            $_SESSION['admin_email'] = $email;
            
            return [
                'success' => true,
                'message' => 'Profil berhasil diperbarui'
            ];
            
        } catch(PDOException $e) {
            return [
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ];
        }
    }
}
?>
