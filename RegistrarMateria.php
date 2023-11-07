<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar materia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea la materia">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Semestre:</label>
                        <input type="text" class="form-control" name="semestre" placeholder="Teclea la semestre">
                    </div>
                    <div class="form-group">
                        <select name="especialidad" class="form-control"></select>
                        <optio value="">Seleccione una especialidad</optio>
                        <optio value="PROGRAMACION">PROGRAMACION</optio>
                        <optio value="CONTABILIDAD">CONTABILIDAD</optio>
                        <optio value="OFIMATICA">OFIMATICA</optio>
                        <optio value="CONSTRUCCION">CONSTRUCCION</optio>
                        <optio value="ELECTRONICA">ELECTRONICA</optio>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>