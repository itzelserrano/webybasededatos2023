<?php

    $sercer="localhost";
    $user="root";
    $password=""; //si tienes XAMPP es $password=""

    //conexion
    $conexion=new mysqli($server, $user, $password);

    //Revisar conexion
    if($conexion->connect_error){
        die("Falló la conexion". $conexion->connect_error);
    }
?>
