<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
       .casilla{
        height:80px;
        font-weight: bold;
       }
       .escalera{
        background-image: url('escalera.png');
        background-size: cover;
       }
       .serpiente{
        background-image: url('serpiente.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
       }
       .ficha{
        background-image: url('carrito.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
       }
    </style>
</head>
<body>

    <div class="container">
        <h1>Practica 7- Tablero de serpientes y escaleras</h1>
        <hr>
        

        <form action="practica7.php" method="POST">
            <input type="submit" value="Jugar" class="btn btn-success"><hr>
        <div class="row">
            <?php
                 $colores=["#037AF8", "#7FB6F0", "#7FE2F0  ", "#159EB0 ", " #1567B0 ", "#D1E6F9 ", ];
                 if(isset($_POST["casilla"])){
                     $dado=95;
                     echo "<h2> Resultado del dado=".$dado."</h2>";
                     $casilla=$dado+intval($_POST["casilla"]);
                     echo "<h3> El jugador estaba en la casilla".intval($_POST["casilla"])." y paso a la casilla ".$casilla."</h3>";
                  //valida si ganó el jugador
                 if($casilla>=100){
                    echo "<h1>El jugador ganó </h1>";
                    $casilla=100;
                 }
                  //valida la escalera de la casilla 
                  if($casilla==4){
                    $casilla=15;
                    echo"<h2>El jugador cayó en una <img src='escalera.png' width='50px'</h2>";
                  }
                  if($casilla==9){
                    $casilla=19;
                    echo"<h2>El jugador cayó en una <img src='escalera.png' width='50px'</h2>";
                  }
                  if($casilla==28){
                    $casilla=38;
                    echo"<h2>El jugador cayó en una <img src='escalera.png' width='50px'</h2>";
                  }
                  if($casilla==92){
                    $casilla=199;
                    echo"<h2>El jugador cayó en una <img src='escalera.png' width='50px'</h2>";
                  }
                  //valida la serpiente de la casilla 
                  if($casilla==16){
                    $casilla=6;
                    echo"<h2>El jugador cayó en una <img src='serpiente.png' width='50px'</h2>";
                  }
                  if($casilla==35){
                    $casilla=25;
                    echo"<h2>El jugador cayó en una <img src='serpiente.png' width='50px'</h2>";
                  }
                  if($casilla==52){
                    $casilla=42;
                    echo"<h2>El jugador cayó en una <img src='serpiente.png' width='50px'</h2>";
                  }
                  if($casilla==99){
                    $casilla=2;
                    echo"<h2>El jugador cayó en una <img src='serpiente.png' width='50px'</h2>";
                  }

                }else{
                    $casilla=0;
                }
                 for($i=100; $i>0; $i--){
                   if($casilla== $i){
                    echo "<div class='col-1 card m-1 casilla ficha' style='background-color:".$colores[rand(0,3)].";'>".$i."</div>";
                
                  }else if($i == 4 || $i == 9 || $i == 33 || $i == 55 || $i == 40 || $i == 80 || $i == 71 || $i == 75 || $i == 92|| $i == 28 ){
                      echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,3)].";'>".$i."</div>";
                  }else if($i == 16 || $i == 52 || $i == 58 || $i == 64 || $i == 87 || $i == 83 || $i == 95  || $i == 99 || $i == 35){
                      echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,3)].";'>".$i."</div>";
                  }else{
                      echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,3)].";'>".$i."</div>";
                  }
                 }
            ?>
   
         </div>  
           <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
        </form>
    </div>
</body>                                               
</html>