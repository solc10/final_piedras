<?php 
    include("conexion.php");
    session_start();
    session_unset();
    session_destroy ();
    header ('location:piedra lunar.php');    
?>