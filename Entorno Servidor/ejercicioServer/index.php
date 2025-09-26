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


$fila = $_GET ['fila'];
$col = $_GET ['col'];
$personaje = null;

if((isset($_GET ['fila']) &&  isset($_GET ['col'])) && (($_GET ['fila'] > 0) && $_GET ['col'] > 0) && (($_GET ['fila'] < 13) && $_GET ['col'] < 13)){
    $fila = $_GET ['fila'];
    $col = $_GET ['col'];

    $personaje = ($fila*12-12) + $col;

}


//Función lógica presentación
function getTableroMArkup ($tablero, $personaje){
    $output = '';
    $cont = 0;
    //dump($tablero);
    foreach ($tablero as $filaIndex => $datosFila) {
        foreach ($datosFila as $columnaIndex => $tileType) {
            //dump($tileType);
            
            $cont++;
            if($cont == $personaje){
                $output .= '<div class = "tile ' . $tileType .  '"><img src = "src/descarga3.png " width="50px" height="50px"></div>';
            }else{
                $output .= '<div class = "tile ' . $tileType .  '"></div>';
            }
          



        }
    }

    return $output;

}
//Lógica de negocio
//El tablero es un array bidimensional en el que cada fila contiene 12 palabras cuyos valores pueden ser:
// agua
//fuego
//tierra
// hierba

function getDevolver ($personaje){
    if(isset($personaje)){
        return ' ';
    }else{
        return "<h2>Posiciones inválidas</h2>";
    }
 
}   

function leerArchivoCSV($archivoCSV) {
    $tablero = [];

    if (($puntero = fopen($archivoCSV, "r")) !== FALSE) {
        while (($datosFila = fgetcsv($puntero)) !== FALSE) {
            $tablero[] = $datosFila;
      
        }
        fclose($puntero);
    }

    return $tablero;
}



$tablero = leerArchivoCSV('contenido_tablero/contenido.csv');

//Lógica de presentación
$tableroMarkup = getTableroMArkup($tablero, $personaje);
$posicionInvalida = getDevolver ($personaje);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <style>
        .contenedorTablero {
            width: 600px;
            height: 600px;
            border-radius: 5px;
            border: solid 2px grey;
            box-shadow: grey;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(12, 1fr);
            
        }
        .tile {
            width: 50px;
            height: 50px;
            float: left;
            margin: 0;
            padding: 0;
            border-width: 0;
            background-image: url("src/464.jpg");
            background-size: 209px;

        }
        .fuego {
    
            background-position: -105px -52px ;
        }
        .tierra {
            background-position: 103px 52px;
        }
        .agua {
            background-position: -54px 0px;
        }
        .hierba {
            background-position: 50px -52px;
        }
        .personaje{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <h1>Tablero juego super rol DWES introduciendo posicion</h1>
    <div class="contenedorTablero">
        <?php echo $tableroMarkup; ?>
    </div>
    <br>
    <div>
        <?php echo $posicionInvalida; ?>
    </div>    
</body>
</html>