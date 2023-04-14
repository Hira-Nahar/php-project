<?php

namespace App\classes;
use App\classes\User;

class Login{

    private $email;
    Private $password;
    private $users;

    public function index()
    {
        header('Location:pages/login.php');
    }
    public function __construct($data = null)
    {
        if($data)
        {
            $this->email     = $data['email'];
            $this->password  = $data['password'];
        }
    }
    public function login()
    {
        $user = new User();
        $this->users = $user->getAllUser();
        foreach($this->users as $item)
        {
            if($item['email'] == $this->email && $item['password'] == $this->password)
            {
                session_start();
                $_SESSION['id']    = $item['id'];
                $_SESSION['name']  = $item['name'];
                header('Location:home.php');
            }
        }
        return "Sorry..your email Id or password is invalid";
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location:../index.php');
    }
}