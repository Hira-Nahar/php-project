<?php

require_once '../vendor/autoload.php';

use App\classes\Login;
use App\classes\Password;

if (isset($_POST['loginBtn']))
{
    $login = new Login($_POST);
    $message = $login->login();
    include 'login.php';
}
else if(isset($_GET['status']))
{
    $login = new Login();
    $login->logout();
}

if (isset($_POST['btn']))
{
    $password = new Password($_POST);
    $result = $password->PasswordGenerator();
    include 'password.php';
}
