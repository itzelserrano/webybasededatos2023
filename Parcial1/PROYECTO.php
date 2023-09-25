<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Bingo</h1><hr>
        <form action="PROYECTO.php" method="POST">
            <?php
            if(isset($_POST["carta1"])){
                $carta1=$_POST["carta1"];
                //Aqui empieza la logica del juego 
                $carta=rand(1,99);
                echo "<h2>Carta dada <img src='Numeros/".$carta.".jpeg' class='img-fluid' width='100px'></h2>";

            }else{
                $carta1=[];
                $total=0;
                while($total<16){
                    $numero=rand(1,99);
                    if(array_search($numero,$carta1)===false){
                        $carta1[$total]=$numero;
                        $total ++;
                    }
                }
                
            }
            ?>
            <input type="submit" value="Dar Carta" name="carta" class="btn btn-primary">
            <div class="row">
            <div class="col-6">
                <div class="row m-1">
                    <?php
                        //Pintar Carta 1
                        for($i=0; $i<25; $i++){
                            echo "<div class='col-3 p-0'><img src='Numeros/".$carta1[$i].".jpeg' class='img-thumbnail'></div>";
                            echo "<input type='hidden' name='carta1[]' value='". $carta1[$i]."'>";
                        }
                    ?>
                </div>
                </div>
            
            </div>
        </div>
        </form>

    </div>
</body>
</html>