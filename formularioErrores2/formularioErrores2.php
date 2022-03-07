<?php
    if(isset($_POST['btnEnviar'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>RECOGIDA DE LOS DATOS</h1>
    <!-- ABRIMOS PHP PARA MOSTRAR LOS DATOS RECOGIDOS EN NUESTRA PÁGINA -->
    <?php
        echo "<p>El nombre es: ".$_POST['nombre']."</p>";
        echo "<p>El apellido es: ".$_POST['apellidos']."</p>";
        echo "<p>El email es: ".$_POST['email']."</p>";
        echo "<p>La contraseña es: ".md5($_POST['contras'])."</p>";
        // LA CONTRASEÑA ESTÁ CODIFICADA CON .MD5
        echo "<p>El sexo es: ".$_POST['sexo']."</p>";
        echo "<p>El nivel de estudios es: ".$_POST['estudios']."</p>";
        // LOS TEMAS ES UN ARRAY DE POSIBLES SELECCIONES DEL USUARIO, POR LO QUE COMPROBAREMOS SI HA SELECCIONADO ALGUNA PARA MOSTRAR UN MENSAJE DIFERENTE EN CADA CASO
        if(isset($_POST['temas'])){
            // EN CASO DE QUE HAYA MARCADO ALGUN TEMA ENTRARÁ AQUI
            // GUARDAMOS EL ARRAY DE LOS TEMAS EN UNA VARIABLE
            $temas = $_POST['temas'];
            // GUARDAMOS EL NUMERO DE TEMAS SELECCIONADO EN UNA VARIABLE
            $numeroTemas = count($temas);
            // MOSTRAMOS UN MENSJAE CON LOS TEMAS ELEGIDOS
            echo "<p>Temas elegidos:</p>";
            // Y PARA MOSTRAR LOS TEMAS USAREMOS UNA LISTA ORDENADA
            echo "<ol>";
            // RECORREMOS CON UN FOR EMPEZADO POR EL PRIMER TEMA Y ACABANDO EN EL NÚMERO DE TEMAS QUE HAYAMOS SELECCIONADO
            for ($i=0; $i < $numeroTemas; $i++) { 
                // POR CADA TEMA CREAMOS UN LI PARA NUESTRA LISTA
                echo "<li>".$temas[$i]."</li>";
            }
            echo "</ol>";
        }else{
            // SI NO HA SELECCIONADO NINGUN TEMA MOSTRAMOS UN MENSAJE INFORMATIVO
            echo "<p>No se ha seleccionado ningún tema</p>";
        }
        // MOSTRAMOS MÁS DATOS RECOGIDOS
        echo "<p>El dia de la semana es: ".$_POST['dia']."</p>";
        echo "<p>El comentario es: ".$_POST['comentario']."</p>";
    ?>
</body>

</html>

<?php
    }else{
        header('Location: formularioErrores2.html');
    }
?>