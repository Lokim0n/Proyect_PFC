<?php

 $destino="ri259636@uaeh.edu.mx";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["message"];
 $contenido="Nombre: ".$name."\nCorreo: ".$email."\nMensaje: "."\n".$message;
 mail($destino,"Contacto", $contenido);
 header("Location: https://lokim0n.github.io/Proyect_PFC/");
?>