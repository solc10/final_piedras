<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <video autoplay muted loop class="video-background">
    <source src="./login/piedras.mp4" type="video/mp4">
    </video>
    <?php
    include("conexion.php");
    $sql = "SELECT c. * FROM categoria c";
    $datos = mysqli_query($conexion, $sql);
    ?>
    <form action="subida.php" method="get">
        <div class="caja1">
            <label for="">Ingrese su nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="ej: Luna Agate">
        </div>
        <div class="caja1">
            <label for="">¿Que piedra quiere comprar?</label> <br>
            <select name="imagen">
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
            </select> <br>
        </div>
         <div class="caja1">
            <label for="">Su categoria:</label> <br>
                <select name="categoria">
                    <option value="1">-</option>
                    <?php foreach ($datos as $dato) { ?>
                        <option value="<?php echo $dato['id_categoria'] ?>"><?php echo $dato['nombre_categoria'] ?></option>
                    <?php } ?>
                </select> <br>
        </div>
        <div class="caja1">
            <label for=""> Ingrese su precio </label>
            <input type="number" name="precio" id="precio" placeholder="ej: $2500">
        </div>
        <div class="caja1">
            <label for="">Descripcion</label><br><br>
            <textarea name="descripcion"></textarea>
        </div>
         <div class="caja2">
            <button type="submit"> ENVIAR</button>
            <a href="piedra lunar.php">VOLVER</a>
         </div>
    </form>
</body>
</html>