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
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class=" form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno:" require>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input name="nc" type="text" class="form-control" placeholder="Teclea el número de control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input name="semestre" type="text" class="form-control" placeholder="Teclea el semestre" require>
                    </div>
                </form>
            </div>
        </div>
    </div>

   <foorter class="text-center">
        <hr>
        CETIs 107 &copy; 2023
        <foorter>

        <script scr="js/bootstrap.js"></script>
</body>
</html>