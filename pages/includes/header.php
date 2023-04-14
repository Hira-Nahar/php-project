<?php session_start() ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <?php if (isset($_SESSION['id'])) {?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class="container">
        <a href="" class="navbar-brand">BHS</a>
        <ul class="navbar-nav text-white">
            <li><a href="add-product.php" class="nav-link text-white">Add-product</a></li>
            <li><a href="manage.php" class="nav-link text-white">Manage-product</a></li>
            <li><a href="password.php" class="nav-link text-white">Password</a></li>
            
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ;?>
                </a>
                <ul class="dropdown-menu">
                   <li><a href="" class="dropdown-item">Profile</a></li> 
                   <li><a href="action.php?status=logout" class="dropdown-item">Logout</a></li> 
                </ul>
            </li>
        </ul>
    </div>
</nav>  

<?php }?>