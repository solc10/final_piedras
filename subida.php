<?php 
    include("conexion.php");


    $nombre = $_GET ['nombre'];
    $imagen  = $_GET ['imagen']; 
    $categoria = $_GET ['categoria'];
    $precio = $_GET ['precio'];
    $descripcion = $_GET ['descripcion'];

    $sql = "INSERT INTO `productos`(`nombre_producto`, `imagen`, `precio`, `id_categoria`,`descripcion`) VALUES ('$nombre','$imagen',$precio,$categoria,'$descripcion')";
    $datos =  mysqli_query ($conexion, $sql);

    header ("location:piedra lunar.php");

?>