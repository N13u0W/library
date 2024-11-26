<?php
require_once 'Controller.php';
require_once 'models/User.php';

class AuthController extends Controller
{
    public static function index()
    {
        return self::view("views/login.php");
    }

    public static function register()
    {
        if (count($_POST) > 0) {

            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $name = htmlspecialchars($_POST['name']);
            $username = htmlspecialchars($_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


            if ($name == '' || $username == '' || $password == '') {
                $_SESSION['error'] = "All fields me be filled!";
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;

                header('location: /register');
                die();
            }

            $user = new User($name, $username, $password, 1);
            $user->register();
            die();
        }
        return self::view("views/register.php");
    }
}

if ($uri == '/login') {
    return AuthController::index();
}

AuthController::register();
