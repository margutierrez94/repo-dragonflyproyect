<?php
   $destino = "marysolgut882@gmail.com";
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombre: " .$nombre . "/nEmail :" .$email . "n/Mensaje:" . $mensaje;
   mail($destino,"Contacto" , $contenido);
   header("location:gracias.html");
   ?>