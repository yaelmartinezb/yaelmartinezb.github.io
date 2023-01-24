<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
	    $email = trim($_POST['email']);
	    $password = md5($_POST['password']);
	    $consulta = "INSERT INTO persona(email, password) VALUES ('$email','$password')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>