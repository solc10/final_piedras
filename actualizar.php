<?php 
    include("conexion.php");

    $nombre = $_GET ['nombre'];
    $imagen  = $_GET ['imagen']; 
    $categoria = $_GET ['categoria'];
    $precio = $_GET ['precio'];
    $descripcion = $_GET ['descripcion'];
    $id = $_GET ['id'];

    if (strlen($_GET ['id']) > 0) {
        
    $sql = "UPDATE `productos` SET `nombre_producto`='$nombre',`imagen`='$imagen',`precio`=$precio,`id_categoria`=$categoria,`descripcion`='$descripcion' WHERE id_producto = '$id'";
    }
    $datos = mysqli_query($conexion, $sql);
    header("location:tabla.php");
?>