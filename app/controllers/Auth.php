<?php

class Auth extends Controller
{
    private $customerModel;

    public function __construct()
    {
        // Initialize model
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
        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password']
        ];

        // Validate inputs
        if (empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['confirm_password'])) {
            $_SESSION['error'] = "All fields are required!";
            $_SESSION['signup_data'] = $data; // Save input data to repopulate form
            header('Location: ' . BASEURL . '/auth/signup');
            exit;
        }

        if ($data['password'] !== $data['confirm_password']) {
            $_SESSION['error'] = "Passwords do not match!";
            $_SESSION['signup_data'] = $data;
            header('Location: ' . BASEURL . '/auth/signup');
            exit;
        }

        // Check if email already exists
        if ($this->customerModel->findUserByEmail($data['email'])) {
            $_SESSION['error'] = "Email already exists!";
            $_SESSION['signup_data'] = $data;
            header('Location: ' . BASEURL . '/auth/signup');
            exit;
        }

        // Call signup method to add data
        if ($this->customerModel->signup($data)) {
            unset($_SESSION['error']);
            unset($_SESSION['signup_data']);
            $_SESSION['success'] = "Registration successful! Please log in.";
            $_SESSION['signup_success'] = true;
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        } else {
            $_SESSION['error'] = "Registration failed, please try again.";
            $_SESSION['signup_data'] = $data; // Save input data for repopulation
            header("Location: " . BASEURL . "/auth/signup");
            exit();
        }
    }

    public function btnLogin()
    {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Validate input
        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Email and password are required!";
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }

        // Check if user exists
        $user = $this->customerModel->findUserByEmail($email);

        // Debugging: Check what user is fetched
        error_log("User fetched: " . print_r($user, true)); // Log the fetched user data

        if ($user) {
            // Debugging: Check password verification
            if (password_verify($password, $user['Password'])) {
                // Set session variables
                unset($_SESSION['error']);
                unset($_SESSION['login_data']);
                $_SESSION['user_id'] = $user['CustomerId'];
                $_SESSION['username'] = $user['Username'];
                $_SESSION['success'] = "Login successful!";
                $_SESSION['redirect'] = true; // Add this line
                header('Location: ' . BASEURL . '/auth/login'); // Redirect to login
                exit;
            } else {
                $_SESSION['error'] = "Invalid email or password!";
                header('Location: ' . BASEURL . '/auth/login');
                exit;
            }
        } else {
            $_SESSION['error'] = "Invalid email or password!";
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }

    public function logout()
    {
        session_destroy(); // Destroy session
        header('Location: ' . BASEURL . '/auth/login'); // Redirect to login page
        exit();
    }
}
