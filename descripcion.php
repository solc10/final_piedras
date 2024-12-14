<?php 
    include("conexion.php");
    $id = $_GET ["id"];
    $sql = "SELECT * FROM `productos` WHERE id_producto = $id";
    $datos = mysqli_query($conexion, $sql);

    $dato = mysqli_fetch_array($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
    <title>Descripcion</title>
    <link rel="stylesheet" href="estilo_piedras.css">
</head>
<body>
    <video autoplay muted loop class="video-background">
    <source src="./login/piedras.mp4" type="video/mp4">
    </video>
    <div class="ima">
        <img src="./piedras/<?php echo $dato['imagen'] ?>" alt="AGT-001">
    </div>
    <h1><?php echo $dato['nombre_producto'] ?></h1>
    <h1>$<?php echo $dato['precio'] ?></h1>
    <h5><?php echo $dato['descripcion'] ?></h5>
    <a href="piedra lunar.php">Volver a ver piedras</a>
   
</body>
</html>