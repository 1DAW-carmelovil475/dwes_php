
<?php

    $Carmelo = ["Martín", "Pepe"];
    $Doimgou = ["Juan", "Carlos"];
    $jefes = [
        'Carmelo' => $Carmelo,
        'Domingo'=> $Doimgou
    ];



    function mostrarLista($jefes) {
        foreach ($jefes as $clave => $valor){
            echo "<li>" . $clave . "</li>";
            for ($i = 0; $i < count($valor); $i++){
                echo "<ul>" . "<li>". $valor[$i] . "</li>" . "</ul>";
            }
        }
       
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>LISTA DE USUARIOS</p>
    <ul>
        <?php        
            mostrarLista($jefes);            
        ?>

    </ul>
</body>
</html>




