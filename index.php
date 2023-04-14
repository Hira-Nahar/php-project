<?php

require_once './vendor/autoload.php';

use App\classes\Login;
use App\classes\Password;

$home = new Login();
$home->index();

