<?php
  include("conexion.php");
  session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
    <title>Login Piedra Lunar</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var clave = document.getElementById("clave").value;

            if (nombre === ''){
                alert("Por favor, ingresa tu nombre de usuario.");
                return false;
            }
            if (clave === ''){
                alert("Por favor, ingresa tu clave.");
                return false;
            }
            if (clave.length < 5) {
                alert("La clave debe tener al menos 5 caracteres.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
  <div class="logo">
    <img src="./login/logo.png">
  </div>
    <div class="login-box">
        <h2>Iniciar sesión
          en
          
          moonshare
        </h2>
        <form id="loginForm" action="session.php" method="post" onsubmit="return validarFormulario()">
          <div class="user-box">
            <input type="text" name="nombre" id="nombre">
            <label>Nombre de usuario</label>
          </div>
          <div class="user-box">
            <input type="password" name="clave" id="clave">
            <label>Contraseña</label>
          </div>
          <button id="button" type="submit" value="iniciar session">Enviar</button>
        </form>
</body>
</html>