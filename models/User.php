<?php

require_once 'config/database.php';

class User
{
    private $name, $username, $password, $role_id;

    public function __construct($name, $username, $password, $role_id)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->role_id = $role_id;
    }

    public function register()
    {
        try {
            global $pdo;
            $user = "INSERT INTO users (name, username, password, role_id) VALUES ('$this->name', '$this->username', '$this->password', $this->role_id)";
            $pdo->exec($user);
            $_SESSION['success'] = "Register Success!";
            header('location: /register');
        } catch (PDOException $e) {
            echo $user . "<br>" . $e->getMessage();
        }
    }
}
