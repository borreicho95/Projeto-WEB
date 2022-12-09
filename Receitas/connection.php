<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "site receitas";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Erro na conexão com o MySQL: ". mysqli_connect_error());  
    }  
?>  