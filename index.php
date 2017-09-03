<?php session_start(); ?><!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <?php require('menu.php'); ?>
    

    <div class="forside">
    <?php
	if(empty($_SESSION['uid'])) {
        echo '<h3>Du skal være logget ind for at se indeholdet.<br> Hvis du ikke har en bruger kan du oprette en lige <a class="login_forside" href="opret.php">HER</a>';
	}
	else {
        echo 'Du er logget ind og kan derfor se det her';
	}
?>
    </div>
    
</body>
</html>
