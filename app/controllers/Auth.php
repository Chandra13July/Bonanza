<?php

class Auth extends Controller
{
    private $customerModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->customerModel = $this->model('CustomerModel');
    }

    public function login()
    {
        $this->view('templates/header');
        $this->view('auth/login');
    }

    public function signup()
    {
        $this->view('templates/header');
        $this->view('auth/signup');
    }

    public function btnSignup()
    {
        // Ambil data dari form
        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password']
        ];

        // Validasi input
        if (empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['confirm_password'])) {
            $_SESSION['error'] = "Semua kolom harus diisi!";
            $_SESSION['signup_data'] = $data; // Simpan data input yang salah
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }

        // Validasi panjang password
        if (strlen($data['password']) < 6) {
            $_SESSION['error'] = "Password harus terdiri dari minimal 6 karakter!";
            $_SESSION['signup_data'] = $data; // Simpan data input yang salah
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }

        // Cek apakah password dan konfirmasi password cocok
        if ($data['password'] !== $data['confirm_password']) {
            $_SESSION['error'] = "Password dan konfirmasi password tidak cocok!";
            $_SESSION['signup_data'] = $data; // Simpan data input yang salah
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }

        // Cek apakah email sudah terdaftar
        if ($this->customerModel->getCustomerByEmail($data['email'])) {
            $_SESSION['error'] = "Email sudah terdaftar!";
            $_SESSION['signup_data'] = $data; // Simpan data input yang salah
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }

        // Hashing password untuk keamanan
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Panggil metode signup untuk menambahkan data
        if ($this->customerModel->signup($data)) {
            // Jika pendaftaran berhasil
            unset($_SESSION['error']);
            unset($_SESSION['signup_data']);
            $_SESSION['success'] = "Pendaftaran berhasil! Silakan login.";

            // Simpan pesan sukses dalam session dan arahkan ke halaman signup
            $_SESSION['signup_success'] = true;
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        } else {
            $_SESSION['error'] = "Pendaftaran gagal, coba lagi.";
            $_SESSION['signup_data'] = $data; // Simpan data input yang salah
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }
    }

    public function logout()
    {
        session_destroy(); // Menghancurkan session
        header('Location: ' . BASEURL . '/auth/login'); // Arahkan ke halaman login
        exit();
    }
}
