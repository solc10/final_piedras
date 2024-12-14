<?php 
    include("conexion.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM `productos` WHERE  id_producto = '$id'";
    $result= mysqli_query($conexion, $sql);
    header("location:tabla.php");
?>