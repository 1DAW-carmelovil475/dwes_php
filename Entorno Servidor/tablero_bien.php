
<?php

/* Inicialización del entorno */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/* Zona de declaración de funciones */
//Funciones de debugueo
function dump($var){
    echo '<pre>'.print_r($var,1).'</pre>';
}


//Función lógica presentación
function getTableroMarkup($tableroData){
    $output = '';
  
    foreach($tableroData as $filaIndex => $datosFila){
        foreach($datosFila as $columnaIndex => $tileType){
            $output .= '<div class = "tile ' .$tileType.'"></div>';
        }
        
    }
    return $output;
}







//Lógica de negocio
// El tablero es un array bidimensional en el que cada fila contiene 12 palabras cuyos valores pueden ser:
// agua
// fuego
// tierra
// hierba
 $tablero = [
    ['agua', 'fuego', 'hierba', 'agua' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'hierba', 'agua' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'tierra' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'tierra' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'agua' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'agua' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'hierba' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'hierba' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego' , 'tierra' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego' , 'agua' , 'tierra', 'fuego', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'agua', 'agua' , 'fuego' , 'fuego'],
    ['agua', 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego' , 'agua' , 'fuego', 'fuego', 'agua' , 'fuego' , 'fuego'],

];


$tableroMarkup = getTableroMarkup($tablero);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedorTablero{
            width: 600px;
            height: 600px;
            border-radius: 5px;
            border: solid 2px grey;
            box-shadow: grey;
        }
        .tile{
            width:50px;
            height:50px;
            display : inline-block;
            float : left;
        }
        .fuego{
            background-color: red;
        }
        .tierra{
            background-color: brown;
        }
        .agua{
            background-color: blue;
        }
        .hierba{
            background-color: green;
        }

    </style>
</head>
<body>
    <h1>Tablero juego super rol DWES</h1>
    <div class = "contenedorTablero">
        <?php echo $tableroMarkup; ?>
        
        

        
    </div>
</body>
</html>