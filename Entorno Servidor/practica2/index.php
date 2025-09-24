<?php
//Inicialización entorno
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//Lógica de negocio
//Definición o carga de funciones
//Función de debugueo
function dump($var){
    echo '<pre>'.print_r($var,1).'</pre>';
}


function getTablero ($hori, $vert){
    $tableroOutput = '';
    for($i=0 ; $i < $hori ; $i++){
        $tableroOutput .= '<canvas width = "100" height = "100" style="border:1px solid #000000';
        $tableroOutput .= '</canvas>';
    }
    
}

function getTableroMarkup($tableroData){
    
    

}

//Cargamos datos
$tablero = array(
   0 => array (

   )
);

$tableroMarkup = getTableroMarkup($tablero);

?>
<!DOCTYPE html>
<html lang="es">
<!-- <head>
    Minified version 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<body>
    <h1>Tablero</h1>
    <canvas id="myCanvas" width="100" height="100" style="border:1px solid #000000;">
    Your browser does not support the HTML canvas tag.
    </canvas>
    <canvas id="myCanvas" width="100" height="100" style="border:1px solid #000000;">
    Your browser does not support the HTML canvas tag.
    </canvas>
    <?php
    echo getTablero(12,12)
    ?>
    
</body>
</html>