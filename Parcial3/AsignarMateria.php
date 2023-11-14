<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>

    <?php
        include 'menu.php';
        include 'conexion.php';
        $sql_alumnos= "SELEC * FROM alumnos";
        $sql_materia="SELECT * FROM materia";
        $datos_alumnos=$conexion->query($sql_alumnos);
        $datos_materias=$conexion->query($sql_materias);
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 card p-4 m-2">
                <h2>Asignar materias a alumnos</h2><hr>
                <form action="">
                    <label for="">Alumno:</label>
                    <select name="alumno" class="form-control">
                        <option value="">Selecciona un alumno</option>
                        <?php
                            if($datos_alumnos->rows > 0){
                                while($registro = $datos_alumnos->fetch_assoc()){?>

                                }
                            }
                        ?>
                    </select>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>