<?php
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

$array2 = array('foo', 'bar');

// echo $array['foo'];

// var_dump($array2);

for ($i=0; $i < count($array2); $i++) { 
    echo $array2[$i] . ' ';
}

// $array2[] = 'nuevo';
?>