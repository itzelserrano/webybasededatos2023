<?php
    include  'conexion.php'
   
    $id=$_POST("ID");
    $id=$_POST("Nombre");
    $id=$_POST("Numero de control");
    $id=$_POST("Semestre");
    $id=$_POST("Edad");
    $id=$_POST("Turno");
    $id=$_POST("Sexo");
   

    $sql="UPDATE alumnos SET nombre='". $nombre."', numero_control='". $numero_control."', semestre=".$semestre.", edad=".$edad.", turno=".$turno.'". sexo=".$sexo,'" WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarAlumnos.php");
        $conexion->close();
        exit;
    }else{
        echo"<h2>Ocurrió un error</h2> <p>Error: " .$sql ."<br>" . $conexion->error . "</p>";
        echo"<h3><a href='consultarAlumnos.php'>Regresar a alumnos</h3>";
        $conexion->close();
    }


?>