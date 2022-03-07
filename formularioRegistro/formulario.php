<?php
    if(isset($_POST['enviar_btn'])){
        $errorNombre = ($_POST['nombre_txt'] == '');
        $errorEdad = ($_POST['edad_txt'] == '');
        $errorEmail = ($_POST['email_txt'] == '');
        $errorAsunto = ($_POST['asunto_txt'] == '');
        $errorComentario = ($_POST['comentarios_txa'] == '');

        $error = ($errorNombre || $errorEdad || $errorEmail || $errorAsunto || $errorComentario);

        if(!$error){
// NO HAY ERROR
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
    <h1>Recogida de datos</h1>
    <?php
    echo "<p>ERRORES</p>";
    echo "<p>Error errorNombre: ".$errorNombre."</p>";
    echo "<p>Error errorEdad: ".$errorEdad."</p>";
    echo "<p>Error errorEmail: ".$errorEmail."</p>";
    echo "<p>Error errorAsunto: ".$errorAsunto."</p>";
    echo "<p>Error errorComentario: ".$errorComentario."</p>";
    echo "<p>Error global: ".$error."</p>";
    echo "<p>DATOS</p>";
    echo "<p>Tu nombre: " . $_POST['nombre_txt'] . "</p>";
    echo "<p>Tu edad: ".$_POST['edad_txt']."</p>";
    echo "<p>Tu email: " . $_POST['email_txt'] . "</p>";
    if($_POST['sexo_rdo'] == 'M'){
        echo "<p>Tu sexo: hombre</p>";
    }else if($_POST['sexo_rdo'] == 'F'){
        echo "<p>Tu sexo: mujer</p>";
    }else{
        echo "<p>Tu sexo: otro</p>";
    }
    echo "<p>Tu asunto: " . $_POST['asunto_txt'] . "</p>";
    echo "<p>Tu comentario: ".$_POST['comentarios_txa']."</p>";
    ?>
</body>

</html>
<?php
        }else{
// HAY ERROR
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Validación de Formularios con JS</title>
    <meta name="description"
        content="En este ejercicio aprenderemos a validar formularios con JavaScript y darles presentación con CSS." />
    <link rel="stylesheet" href="formulario.css" />
    <style>
    .rojo {
        color: red;
    }
    </style>
</head>

<body>
    <form id="contacto-frm" name="contacto_frm" action="formulario.php" method="POST">
        <fieldset>
            <legend>Contacto CON ERROR</legend>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre_txt" class="cambio"
                value="<?php if(!$errorNombre){ echo $_POST['nombre_txt'];} ?>" />
            <?php
            if($errorNombre){
                echo "<span class='rojo'>*Campo obligatorio*</span>";
            }
            ?>
            <br /><br />
            <label for="edad">Edad: </label>
            <input type="text" id="edad" name="edad_txt" class="cambio"
                value="<?php if(!$errorEdad){ echo $_POST['edad_txt'];} ?>" />
            <?php
            if($errorEdad){
                echo "<span class='rojo'>*Campo obligatorio*</span>";
            }
            ?>
            <br /><br />
            <label for="email">Email: </label>
            <input type="text" id="email" name="email_txt" class="cambio"
                value="<?php if(!$errorEmail){echo $_POST['email_txt'];} ?>" />
            <?php
                if($errorEmail){
                    echo "<span class='rojo'>*Campo obligatorio*</span>";
                }
            ?>
            <br /><br />
            <label for="sexo">Sexo:</label>
            <input type="radio" id="M" name="sexo_rdo" value="M" checked /> <label for="M">Masculino</label>
            <input type="radio" id="F" name="sexo_rdo" value="F" /><label for="F">Femenino</label>
            <input type="radio" id="O" name="sexo_rdo" value="O" /><label for="O">Otro</label>
            <br /><br />
            <label for="asunto">Asunto: </label>
            <input type="text" id="asunto" name="asunto_txt" class="cambio"
                value="<?php if(!$errorAsunto){echo $_POST['asunto_txt'];} ?>" />
            <?php
                if($errorAsunto){
                    echo "<span class='rojo'>*Campo obligatorio*</span>";
                }
            ?>
            <br /><br />
            <label for="comentarios">Comentarios:</label>
            <br />
            <textarea name="comentarios_txa" id="comentarios" cols="50" rows="5" class="cambio"
                value="<?php if(!$errorComentario){echo $_POST['comentarios_txa'];} ?>"></textarea>
            <?php
                if($errorComentario){
                    echo "<span class='rojo'>*Campo obligatorio*</span>";
                }
            ?>
            <br /><br />
            <input type="submit" id="enviar" class="cambio" name="enviar_btn" value="Enviar" />
            <input type="reset" id="limpiar" class="cambio" name="limpiar_btn" value="Limpiar" />
        </fieldset>
    </form>

    <h2>Espero que te guste!!!</h2>
</body>

</html>

<?php
        }

    }else{
        header('Location: formulario.html');
    }
?>