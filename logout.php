<!DOCTYPE html>
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
    session_start();

    session_unset();

    session_destroy();

    echo '<h3>Du er nu logget ud</h3>';

    exit();       
?>
    </div>
    
    <?php require('login.php');?>
</body>
</html>
