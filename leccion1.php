<?php
    echo 'Hola Mundo!';
    echo 'Segundo mensaje';
    echo '<h1>Hola Mundo!</h1>';

    $nombre = 'Fran';
    $edad = 23;


    $resultado = $nombre . ' ' . 'Edad: ' . $edad;

    echo $resultado;


    if ($edad == 23) {
        echo "Si es 23";
    }else {
        echo 'No es 23';
    }


    switch ($edad) {
        case 'value':
            echo "Si es 23";
            break;
    }





?>