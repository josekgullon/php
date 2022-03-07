<?php

$nombre = 'Jose';
$edad = 25;

if ($nombre == 'Jose') {
    echo 'SI SE LLAMA JOSEK';
}else {
    echo 'no se llama Josek';
}

switch ($edad) {
    case 25:
         echo 'SIII ES SU EDAADDD';
        break;
}

for ($i=0; $i < 10; $i++) { 
    echo '<p>' . $i . '</p>';
}

$array = [
    'edad' => 23,
    'nombre' => 'Fran'
];

var_dump($array);

echo '<p>'. $array['edad'] .'</p>';

function test($dato){
    echo '<h1>Salida de funcion</h1>';
}

$array2 = array('Manzana', 'Pera', 'Platano');
var_dump($array2);

echo '<p>'. $array2[1] .'</p>';

$array2[] = 'Fresas';

var_dump($array2);

for ($i=0; $i < count($array2); $i++) { 
    echo '<p>'. $array2[$i] .'</p>';
}

?>