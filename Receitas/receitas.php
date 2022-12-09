<?php

require('login.php');

if( !empty($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
</head>
<body>

<header>
    
    <div id = "form login">  
        <h1>Login</h1> 
        
        <?php 
            if( empty( $username) ) :
        ?> 
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
        <?php else : ?>
            <div>    
                <span><?= $username; ?></span>
                <a href="logout.php">Logout</a>    
            </div>
        <?php endif; ?>
    </header>

    
</body>
</html>