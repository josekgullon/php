<?php
$numero = 2;
$array2 = array('Manzana', 'Pera', 'Platano', 'Mochila', 'Portail');

for ($i=0; $i < count($array2); $i++) { 
    echo '<p>' . $array2[$i] . '</p>';
}

 echo '<p>-----------------</p>';


$array2[] = 'Fresas';

for ($i=0; $i < count($array2); $i++) { 
    echo '<p>' . $array2[$i] . '</p>';
}

$array2['apellido'] = 'Gullon';

var_dump($array2);

$array2['apellido'] = 'vides';

var_dump($array2);

echo '<p>-----------------</p>';

unset($array2[3]);

var_dump($array2);


echo '<p>-----------------</p>';

function template($numeroAux, $arrayAux){

    unset($arrayAux[$numeroAux]);
    var_dump($arrayAux);

    for ($i=0; $i < count($arrayAux); $i++) { 
        echo '<p>' . $arrayAux[$i] . '</p>';
   }

}

template($numero, $array2);