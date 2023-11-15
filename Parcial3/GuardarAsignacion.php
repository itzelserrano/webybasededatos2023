<?php

include 'conexion.php';

$alumno_id = $_POST["alumno"];
$materias_id = $_POST["materias"];

if(count($materia)> 0){
    $sql="";
    for($i=0; $i< count($materia); $i++){
        $sql .= "INSERT INTO alumnos_materias(alumnos_id, materias_id) VALUES('".$alumnos_id.", ".$materia[$i].");";
    
}

    if($conexion->multi_query($sql) === TRUE){
        header("Location: inicio.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarMateria.php'>Regresar a inicio</a></h3>";
        }
    }
?>