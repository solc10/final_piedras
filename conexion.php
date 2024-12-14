<?php

    $conexion = mysqli_connect('localhost','root','','piedras');

    if (!$conexion) {
        die('fallo de conexion'. mysqli_connect_error());
    }