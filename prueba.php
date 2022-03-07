<?php
    echo "<h1>Hola Mundo</h1>";
    echo "<p>Segundo mensaje</p>";
    /*asda
    asdasdasd
    asdasdasdasdasd*/

    //adasd

    $nombre = 'Fran';
    $edad = 23;

    $numero = 2;

    $resultado = $nombre . ', edad: ' . $edad;

    echo $resultado;

    if($edad == 23){
        echo "<p>Si, es 23</p>";
    }else if($edad == 24){
        echo "<p>No, no es 23</p>";
    }

    switch ($edad) {
        case 23:
            echo "<p>Si, es 23</p>";
            break;
    }
    
    for ($i=0; $i < 10; $i++) { 
        echo '<p>' . $i .'</p>';
    }
    $array = [
      'edad' => 23,
      'nombre' => 'Fran'
    ];

    var_dump($array);

    echo '<p>'.$array['nombre'].'</p>';

    function test($dato, $dato2){

        echo "<h1>SALIDA DE FUNCION: ".$dato."</h1>";
    }

    test($nombre, $edad);

    $array2 = array('Manzana', 'Pera', 'Platano');

    var_dump($array2);

    // echo '<p>'.$array2[1].'</p>';

    for($i = 0; $i < count($array2); $i++){
        echo '<p>' . $array2[$i] .'</p>';
    }

    $array2[] = 'Fresas';

    var_dump($array2);

    echo "<p>-------------</p>";

    for($i = 0; $i < count($array2); $i++){
        echo '<p>' . $array2[$i] .'</p>';
    }

    $array['apellido'] = 'Aragón';

    var_dump($array);
    echo "<p>-------------</p>";

    $array2[4] = 'Zanahoria';

    var_dump($array2);
    echo "<p>-----QUITANDO POSICION 0--------</p>";
    // unset($array2[0]);
    var_dump($array2);
    echo "<p>-------------</p>";

    function mochila($numeroAux, $arrayAux){
        // CREAMOS UNA VARIABLE PARA ALMACENAR LA LONGITUD DEL ARRAY ANTES DE MODIFICARLO
        $longitud = count($arrayAux);
        echo "<p>-----FUNCION--------</p>";
        echo $numeroAux;
        echo "<p>-------------</p>";
        var_dump($arrayAux);
        echo "<p>------QUITAR LA POSICION PASADA EN NUMERO AUX-------</p>";
        unset($arrayAux[$numeroAux]);
        echo "<p>-------------</p>";
        var_dump($arrayAux);
        
        for($i = 0; $i < $longitud; $i++){
            if(isset($arrayAux[$i])){
                echo '<p>' . $arrayAux[$i] .'</p>';
            }
            
        }






        

        // for($i = 0; $i < $longitud; $i++){
        //     if(isset($arrayAux[$i])){
        //         echo '<p>' . $arrayAux[$i] .'</p>';
        //     }
            
        // }
    }

    mochila($numero, $array2);
?>