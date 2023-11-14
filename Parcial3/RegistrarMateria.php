<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Materia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="GuardarMateria.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea la materia">
                    </div><br>
                    <div class="form-group">
                        <label for="semestre">Semestre:</label>
                        <input type="number" class="form-control" name="semestre" placeholder="Teclea el semestre">
                    </div><br>
                    <div class="form-group">
                        <label for="semestre">Especialidad:</label>
                            <select name="especialidad" class="form-control">
                                <option value="">Seleccionar una especialidad</option>
                                <option value="PROGRAMACION">Programción</option>
                                <option value="CONTABILIDAD">Contabilidad</option>
                                <option value="OFIMATICA">Ofimatica</option>
                                <option value="CONSTRUCCION">Construcción</option>
                                <option value="ELECTRONICA">Electronica</option>
                            </select><br>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="ConsultarMateria.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>