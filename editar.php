<?php
    include("conexion.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM `productos` WHERE id_producto = '$id'";
    $datos = mysqli_query($conexion, $sql);
    $dato = mysqli_fetch_assoc($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="editar.css">
</head>
<body>
    <video autoplay muted loop class="video-background">
    <source src="./login/piedras.mp4" type="video/mp4">
    </video>
    <?php
        $sql = "SELECT c. * FROM categoria c";
        $datos = mysqli_query($conexion, $sql);
    ?>
    <form action="actualizar.php" method="get">
        <input type="hidden" name="id" value ="<?php echo ($_GET == true ? $dato['id_producto'] : ''); ?>">
        <div class="caja1">
            <label for="nombre">Ingrese su nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="ej: Luna Agate" value ="<?php echo ($_GET == true ? $dato['nombre_producto'] : ''); ?>">
        </div>

        <div class="caja1">
            <label for="imagen">¿Que piedra quiere comprar?</label> <br>
            <select name="imagen" value ="<?php echo ($_GET == true ? $dato['imagen'] : ''); ?>">
                <option value="piedra agate 1.jpg">imagen 1</option>
                <option value="piedra celestial 2.jpg">imagen 2</option>
                <option value="piedra cuarzo 3.jpg">imagen 3</option>
                <option value="nebula 004.jpg">imagen 4</option>
                <option value="obsidian 005.jpg">imagen 5</option>
                <option value="jasper 06.jpg">imagen 6</option>
                <option value="pearlite 07.jpg">imagen 7</option>
                <option value="galaxy celenite 008.jpg">imagen 8</option>
                <option value="labradorite 009.jpg">imagen 9</option>
                <option value="lunarite 10jpg.jpg">imagen 10</option>
            </select>
        </div>

        <div class="caja1">
            <label for="categoria">Su categoria:</label> <br>
            <select name="categoria" value ="<?php echo ($_GET == true ? $dato['categoria'] : ''); ?>">
                <option value="1">-</option>
                <?php foreach($datos as $date) { ?>
                    <option value="<?php echo $date['id_categoria'] ?>"><?php echo $date['nombre_categoria'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="caja1">
            <label for="precio">Ingrese su precio</label>
            <input type="number" name="precio" id="precio" placeholder="ej: $2500" value ="<?php echo ($_GET == true ? $dato['precio'] : ''); ?>">
         </div>
        
        <div class="caja1">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion"><?php echo ($_GET == true ? $dato['descripcion'] : ''); ?></textarea>
        </div>

        <div class="caja2">
            <button type="submit">ACTUALIZAR</button>
        </div>
    </form>
</body>
</html>