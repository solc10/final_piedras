<?php 
    include("conexion.php");
    session_start();

    if (!$_POST ) {
        header("location: login.php"); die();
    }
    $usuario = $_POST["nombre"];
    $clave = $_POST["clave"];

    $sql = "SELECT * FROM `usuarios` WHERE usuario = '$usuario' AND clave = '$clave'";
    $result = mysqli_query($conexion, $sql);
    $filas = mysqli_num_rows($result);
    $dato = mysqli_fetch_assoc($result);

    if ($filas == 1) {
        $_SESSION['usuario'] = $dato['usuario'];
        header('location:piedra lunar.php');
    } else {
        header('location:login.php');
        die();  
    }
    
?>