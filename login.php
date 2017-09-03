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

        <form class="modal-content_login" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="container">
            <label><b>Username</b></label>
            <input class="un_pw" type="text" placeholder="Username" name="username" required>

            <label><b>Password</b></label>
            <input class="un_pw" type="password" placeholder="Password" name="password" required><br>
        
            <input class="button" name="submit" type="submit" value="LOGIN" />
        </div>
            
        </form>

    
    
    
    <div class="forside">
    <?php
if (filter_input(INPUT_POST, 'submit')){
	
	$n = filter_input(INPUT_POST, 'username')
		or die('Missing/illegal username parameter');
	$p = filter_input(INPUT_POST, 'password')
		or die('Missing/illegal password parameter');
	
    
	require_once('db_con.php');
	$sql = 'SELECT UserID, Password_hash FROM users WHERE username=?';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('s', $n);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);
	
	while($stmt->fetch()) {  }
	
	if (password_verify($p, $pwhash)){
		echo '<h3>Du er nu logget ind med username: '.$n. '<br>Gå til <a class="login_forside" href="index.php">forsiden<a></h3>';
        $_SESSION['uid'] = $uid;
 
	}
	else {
		echo 'Kunne ikke logge ind, username eller password er forkert';
	}
}                           
?>
</div>

</body>
</html>
