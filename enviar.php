<?php
  $mail="francisco@centrodocentelasagradafamilia.comuv.com";
  $nombre = $_POST["nombre"];
  $pais = $_POST["asunto"];
  $email = $_POST["correo"];
  $asunto = $_POST["asu"];
  $comentario = $_POST["comentarios"];
  $thank="gracias.html";
  $message = "
  nombre:".$nombre."
  asunto:".$pais."
  correo:".$email."
  asu:".$asunto."
  comentarios:".$comentario."";
  if (mail ($mail,"contactenos",$message)) Header ("location: $thank" );
  ?>