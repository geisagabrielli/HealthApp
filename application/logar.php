<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

 require 'conection.php';
 require 'UsuarioClass.php';

 $u = new Usuario ();

	$email = addslashes($_POST['email']);
	$password = addslashes($_POST['password']);

	if($u->login($email, $password) == true){
		if(isset($_SESSION['Profregister'])){
			 header("Location: index.php");


		}else{
             header("Location: login.php");

		}
}else{

header("Location: login.php");
}
}

?>