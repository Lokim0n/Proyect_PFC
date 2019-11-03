<?php

 $destino="ri259636@uaeh.edu.mx";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["message"];

 $contenido="Nombre: ".$name."\nCorreo: ".$email."\nMensaje: "."\n".$message;

 if(
     mail($destino,"Contacto: ", $contenido);
     )echo "correo enviado";
     else{
        echo "Correo no enviado";
 }
 header("Location: https://lokim0n.github.io/Proyect_PFC/");
?>