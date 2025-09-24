<?php

    $tablero = [
        ["piedra","agua","piedra","agua"],
        ["piedra","agua","piedra","agua"],
        ["piedra","agua","piedra","agua"],
        ["piedra","agua","piedra","agua"]
    ];
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <style>
        .cuadro {
            width:40px; height:40px;
            display:inline-block;
            border:1px solid #222;
        }
        .piedra { background:grey; }
        .agua { background:blue; }
       
    </style>
</head>
<body>
    <h2>Tablero</h2>
    <div class="tablero">
        <?php

            for($i = 0; $i<3; $i++){
                foreach($tablero as $fila){
                foreach($fila as $cuadro){
                    echo "<div class='cuadro $cuadro'></div>";
                }
                echo "<br>"; 
            }
            }
            
        ?>
    </div>
</body>
</html>    
