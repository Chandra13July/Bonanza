<?php

class Auth extends Controller
{
    private $customerModel;
    private $EmployeeModel;

    public function __construct()
    {
        // Initialize model
        $this->customerModel = $this->model('CustomerModel');
        $this->EmployeeModel = $this->model('EmployeeModel');
    }

    public function login()
    {
        $this->view('templates/header');
        $this->view('auth/login');
    }

    public function loginAdmin()
    {
        $this->view('templates/header');
        $this->view('auth/loginAdmin');
    }

    public function signup()
    {
        $this->view('templates/header');
        $this->view('auth/signup');
    }

    public function register()
    {
        $this->view('templates/header');
        $this->view('auth/register');
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

    public function btnSignupAdmin()
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
        header('Location: ' . BASEURL . '/auth/register');
        exit;
    }

    if ($data['password'] !== $data['confirm_password']) {
        $_SESSION['error'] = "Passwords do not match!";
        $_SESSION['signup_data'] = $data;
        header('Location: ' . BASEURL . '/auth/register');
        exit;
    }

    // Validate email format
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format!";
        $_SESSION['signup_data'] = $data;
        header('Location: ' . BASEURL . '/auth/register');
        exit;
    }

    // Validate password length
    if (strlen($data['password']) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long!";
        $_SESSION['signup_data'] = $data;
        header('Location: ' . BASEURL . '/auth/register');
        exit;
    }

    // Check if email already exists
    if ($this->EmployeeModel->findUserByEmail($data['email'])) {
        $_SESSION['error'] = "Email already exists!";
        $_SESSION['signup_data'] = $data;
        header('Location: ' . BASEURL . '/auth/register');
        exit;
    }

    // Call signup method to add data
    if ($this->EmployeeModel->register($data)) {
        unset($_SESSION['error']);
        unset($_SESSION['signup_data']);
        $_SESSION['success'] = "Registration successful! Please log in.";
        $_SESSION['signup_success'] = true;
        header("Location: " . BASEURL . "/auth/register");
        exit();
    } else {
        $_SESSION['error'] = "Registration failed, please try again.";
        $_SESSION['signup_data'] = $data; // Save input data for repopulation
        header("Location: " . BASEURL . "/auth/register");
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
                $_SESSION['ImageUrl'] = $user['ImageUrl'] ?? BASEURL . '/img/customer/User.png'; // Set ImageUrl in session
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

    public function btnLoginAdmin()
    {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Validate input
        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Email and password are required!";
            header('Location: ' . BASEURL . '/auth/loginAdmin');
            exit;
        }

        // Check if user exists
        $user = $this->EmployeeModel->findUserByEmail($email);

        // Debugging: Check what user is fetched
        error_log("User fetched: " . print_r($user, true)); // Log the fetched user data

        if ($user) {
            // Debugging: Check password verification
            if (password_verify($password, $user['Password'])) {
                // Set session variables
                unset($_SESSION['error']);
                unset($_SESSION['login_data']);
                $_SESSION['user_id'] = $user['EmployeeId']; // Use EmployeeId
                $_SESSION['username'] = $user['Username'];
                $_SESSION['ImageUrl'] = $user['ImageUrl'] ?? BASEURL . '/img/customer/User.png'; // Set ImageUrl in session
                $_SESSION['success'] = "Login successful!";

                // Redirect based on role
                switch ($user['RoleId']) {
                    case '1': // Admin
                        header('Location: ' . BASEURL . '/admin/dashboard'); // Redirect to admin dashboard
                        break;
                    case '2': // Cashier
                        header('Location: ' . BASEURL . '/admin/order'); // Redirect to cashier order page
                        break;
                    default:
                        $_SESSION['error'] = "Unrecognized role!";
                        header('Location: ' . BASEURL . '/auth/loginAdmin');
                }
                exit;
            } else {
                $_SESSION['error'] = "Invalid email or password!";
                header('Location: ' . BASEURL . '/auth/loginAdmin');
                exit;
            }
        } else {
            $_SESSION['error'] = "Invalid email or password!";
            header('Location: ' . BASEURL . '/auth/loginAdmin');
            exit;
        }
    }

    public function logout()
    {
        session_destroy(); // Destroy session
        header('Location: ' . BASEURL . '/auth/login'); // Redirect to login page
        exit();
    }

    public function logout1()
    {
        session_destroy(); // Destroy session
        header('Location: ' . BASEURL . '/auth/loginAdmin'); // Redirect to login page
        exit();
    }
}
