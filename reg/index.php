<?php
session_start();
include("../conec.php");



// if (isset($_SESSION['username'])) {
  
 
//   header("Location: ../index.php");
  
//   exit();
//   // Usuario ha iniciado sesión, hacer algo aquí
// } else {
//   // Usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
//   //header("Location: login.php");
  
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Mi PRUEBA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilosphp.css">
  </head>
  <body>
    

<div id="registro">
      <h1 id="sp1">REGISTRO</h1>
      <form method="POST">
      <div class="field"> 
      <INPUT TYPE="text"  autocomplete= "off" NAME="nombre" placeholder="Nuevo Usuario">
      </div>
      <div class="field">
        <INPUT TYPE="password" NAME="pass" placeholder="Nueva Contraseña">
      </div>
        <div class="button">
        
        <INPUT TYPE="submit" NAME="submit"  id="abcs" value="REGISTRARSE">
        

        </div>
        <div>
        <INPUT TYPE="submit" NAME="INGRESAR"  id="abc1" value="YA ESTOY REGISTRADO">
      </div>
</div>
</body>
    <main>
  
      </form>
    </main>
    <?php
include("../registrar.php")
?>
  </body>
</html>