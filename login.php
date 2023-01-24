<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡REGISTRAR DATOS!</h1>
    	<input type="email" name="email" placeholder="Correo electrónico">
    	<input type="password" name="password" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>