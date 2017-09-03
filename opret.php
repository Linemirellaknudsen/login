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
    
    
    
    <form class="modal-content_opret" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
 
        <div class="container">
            <label><b>Username</b></label>
            <input class="un_pw" type="text" placeholder="username" name="username" required>

            <label><b>Password</b></label>
            <input class="un_pw" type="password" placeholder="Password" name="password" required><br>
        
            <input class="button" name="submit" type="submit" value="OPRET" />
        </div>
            
        </form>

    
    
    
    
    <div class="forside">
    <?php
  
        if(filter_input(INPUT_POST, 'submit')){
            
            $n = filter_input(INPUT_POST, 'username')
                or die ('missing name parameter');
            
            $p = filter_input(INPUT_POST,'password')
                or die ('missing password parameter');
            
            $p =password_hash($p, PASSWORD_DEFAULT);
            
            
            require_once('db_con.php');
            $sql = 'INSERT INTO users(Username, Password_Hash) VALUES (?, ?)';
            $stmt = $con->prepare($sql);
            $stmt -> bind_param('ss', $n, $p);
            $stmt -> execute();
            
            if ($stmt -> affected_rows > 0){
                echo 'Du er nu oprette som bruger hos DEN HEMMELIGE SIDE';
            }
            else {
                echo 'Kunne ikke oprette dig som bruger. <br>Prøv med et andet Username';
            }
        }
    ?>
   </div>
    

</body>
</html>
