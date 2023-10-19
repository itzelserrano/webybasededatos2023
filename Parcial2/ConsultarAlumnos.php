<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'home.php';
        include 'conexion';
        
        $sql ="SELECT * FROM alumnos";
        $datos=$conexion->query($sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if("$datos->num_row->0")(?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Numero de control</td>
                                <td>Semestre</td>
                                <td>Edad</td>
                                <td>Turno</td>
                                <td>Sexo</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($registro = $dato->fetch_assco()){?>
                            <tr>
                                <td> <?php echo $registro["id"];?> </td>
                                <td> <?php echo $registro["nombre"];?> </td>
                                <td> <?php echo $registro["numero_control"];?> </td>
                                <td> <?php echo $registro["semestre"];?> </td>
                                <td> <?php echo $registro["edad"];?> </td>
                                <td> <?php echo $registro["turno"];?> </td>
                                <td> <?php echo $registro["sexo"];?> </td>
                                <td>
                                    <a href="" class="btn btn-xs btn-primary"></a>
                                </td>
                            </tr>
                            }
                        </tbody>

                    </table>
                    )
            </div>
        </div>
    </div>

    <footer>
        CETIs 107 &copy; 2023;
    </footer>

</body>
</html>