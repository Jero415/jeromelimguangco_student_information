<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('UserModel');
    }

    public function login()
    {
        $this->startSession();

        if (!empty($_SESSION['authenticated'])) {
            redirect('products');
        }

        $error = null;
        $username = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->io->post();
            $username = trim((string) ($data['username'] ?? ''));
            $password = (string) ($data['password'] ?? '');
            $user = $username !== '' ? $this->UserModel->findByUsername($username) : null;

            if ($user && !empty($user['password']) && $password !== '' && password_verify($password, $user['password'])) {
                session_regenerate_id(true);
                $_SESSION['authenticated'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                redirect('products');
            }

            $error = 'Invalid username or password.';
        }

        $this->call->view('login', [
            'error' => $error,
            'username' => $username,
        ]);
    }

    public function logout()
    {
        $this->startSession();
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        session_destroy();
        redirect('login');
    }

    private function startSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}