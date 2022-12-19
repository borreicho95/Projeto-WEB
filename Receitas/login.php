<?php
    include 'model.php';

    session_start();
	
    if( !empty( $_POST['username'])) {
        $username = $_POST['username'];

        $_SESSION['username'] = $username;

        if( ! usernameExists( $username ) )
            adicionarUser( $username );
    }
    
    header('Location: main_Receitas.php');
?>