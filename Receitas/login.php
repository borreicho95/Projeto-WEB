<?php
	
	if( !empty( $_POST['username'] ))
	{
		setcookie('username', $_POST['username'] );
	}

	header( "Location:cinema.php");

?>