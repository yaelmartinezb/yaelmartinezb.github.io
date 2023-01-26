<?php
  $email = ($_POST["email"]);
  $password = ($_POST["password"]); 
  $contador = 0;
  $base = new PDO("mysql:host=localhost; dbname=login1", "root", "");
  $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql="SELECT * FROM persona WHERE email= :email";
  $resultado = $base->prepare($sql);
  $resultado->execute(array(":email"=>$email));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        //echo "Usuario : " . $registro['email'] . " Contraseña: " . $registro['password'] . "<br>";
        if (password_verify($password, $registro['password'])){
            $contador++;
        }
    }
    if($contador>0){
        echo "Usuario registrado";
    }else{
        echo "Usuario no registrado, intente de nuevo";
    }
?>