<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php
    include 'conexion.php';
    include 'menu.php';
    
    $sql ="SELECT * FROM alumno a INNER JOIN alumno_materias am ON a.id = am.alumnos_id INNER JOIN materia m On m.id = am.materia_id";
    $datos = $conexion->query($sql);
    ?>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>