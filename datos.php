<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>ESTOS SON TUS DATOS</h1>

<?php

if ($_GET['nombre'] == '') {
    echo 'Rellena el nombre por favor';
}else {
    echo 'El nombre es ' . $_GET['nombre'] . ' ' . 'ha nacido en ' . $_GET['provincia'] . ' ' . 'es un súper ' . $_GET['sexo'];
}
    



?>


</body>
</html>