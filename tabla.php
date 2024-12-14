<?php 
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
    
    <title>Document</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
<video autoplay muted loop class="video-background">
    <source src="./login/piedras.mp4" type="video/mp4">
    </video>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php 
            $sql = "SELECT p. * ,c.nombre_categoria FROM productos p, categoria c WHERE p.id_categoria = c.id_categoria";
            $datos = mysqli_query ($conexion, $sql);
            foreach ($datos as $dato) {   
        ?>
        <tr>
            <td><?php echo $dato ['nombre_producto'] ?></td>
            <td><img width="100px" height="100px" src="./piedras/<?php echo $dato ['imagen'] ?>" alt=""></td>
            <td>$<?php echo $dato ['precio'] ?></td>
            <td><?php echo $dato ['nombre_categoria'] ?></td>
            <td><?php echo $dato ['descripcion'] ?></td>
            <td><a href="editar.php?id=<?php echo $dato ['id_producto'] ?>">Editar</a></td>
            <td><a href="eliminar.php?id=<?php echo $dato ['id_producto'] ?>">eliminar</a></td>
        </tr>
            
      <?php } ?>
    </table>
    <a href="piedra lunar.php">Volver a inicio</a>
    
</body>
</html>