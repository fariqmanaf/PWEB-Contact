<?php
include_once 'Model/user.php';
include_once 'Config/main.php';
include_once 'Config/static.php';

class AuthController {
    static function login() {
        view('Login/index');
    }

    static function register() {
        view('Register/index');
    }

    static function sessionLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['email'], 
            'password' => $post['password']
        ]);
        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: dashboard');
        }
        else {
            header('Location: login?failed=true');
        }
    }

    static function newRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'firstname' => $post['firstname'], 
            'lastname' => $post['lastname'], 
            'email' => $post['email'], 
            'password' => $post['password']
        ]);

        if ($user) {
            header('Location: login');
        }
        else {
            header('Location: register?failed=true');
        }
    }

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: login');
    }
}