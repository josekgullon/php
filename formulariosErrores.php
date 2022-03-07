<?php

if(isset($_POST["btnenviar"]))
{

	$error_nombre=$_POST["nombre"]=="";
	$error_comentario=$_POST["comentarios"]=="";
	$error=$error_nombre||$error_comentario;
}


if(isset($_POST["btnenviar"]) && !$error)
{
?>
<!DOCTYPE html>
<html>

<head>
    <title>Recogida</title>
    <meta charset="UTF-8" />
</head>

<body>
    <h1>Estos son los datos enviados:</h1>
    <?php
				if($_POST["nombre"]=="")
				{
					echo "<p>No has tecleado nada en el campo nombre</p>";
				}
				else
				{
					echo "<p>El nombre enviado ha sido: ".$_POST["nombre"]."</p>";
				}	


				echo "<p>Ha nacido en: ".$_POST["nacido"]."</p>";
				echo "<p>El sexo es: ".$_POST["sexo"]."</p>";



				if(isset($_POST["aficiones"]))
				{
					$aficiones=$_POST["aficiones"];
					$n_elementos=count($aficiones);
					echo "Las aficiones seleccionadas han sido:";
					echo "<ol>";			
					for($i=0;$i<$n_elementos;$i++)
					{
						echo "<li>".$aficiones[$i]."</li>";
					}
					echo "</ol>";

				}
				else
				{
					echo "<p>No has seleccionado ninguna afición</p>";
				}

				

				if($_POST["comentarios"]=="")
				{
					echo "<p>No has hecho ningún comentarios</p>";
				}
				else
				{
					echo "<p>El comentario enviado ha sido: ".$_POST["comentarios"]."</p>";
				}
				?>


</body>

</html>

<?php	
}
else
{
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mi primera página PHP</title>
    <meta charset="UTf-8" />
</head>

<body>
    <h1>Esta es mi super página</h1>
    <form method="post" action="formulariosErrores.php">

        <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre"
            value="<?php if(isset($_POST["nombre"])) echo $_POST["nombre"];?>" /><?php if(isset($_POST["btnenviar"]) && $error_nombre)
		{
			echo "* Campo obligatorio *";
		}
			
		?>
        <br /><br />
        <label for="nacido">Nacido en : </label>
        <select id="nacido" name="nacido">
            <option value="Málaga">Málaga</option>
            <option value="Cádiz">Cádiz</option>
            <option value="Granada">Granada</option>

            <?php
      
         $datos = array("Málaga","Cádiz","Granada");
         
         for($i=0; $i<count($datos); $i++)
         {
            if($i==$_POST["nacido"])
            {
               echo "<option value='".$i."' selected>".$datos[$i]."</option>";
            }
            else
            {
               echo "<option value='".$i."'>".$datos[$i]."</option>";
            }
         }
      
      ?>

        </select>
        <br /><br />
        Sexo: <label for="hombre">Hombre</label><input id="hombre" type="radio" name="sexo" value="Hombre"
            checked /><label for="mujer">Mujer</label><input id="mujer" type="radio" name="sexo" value="Mujer" />

        <?php
				if(isset($_POST["hombre"])){
				
					echo "checked";
				
				} else if(isset($_POST["mujer"])){
				
					echo "checked";
				}
			?>
        <br /><br />


        Aficiones: <label for="deportes">Deportes</label><input id="deportes" type="checkbox" name="aficiones[]"
            value="Deportes" /><label for="lectura">Lectura</label><input id="lectura" type="checkbox"
            name="aficiones[]" value="Lectura" /><label for="otros">Otros</label><input id="otros" type="checkbox"
            name="aficiones[]" value="Otros" />

        <?php
				if(isset($_POST["aficiones[]"])){
				
					echo "checked";
				
				}
			?>

        <br /><br />
        <label for="comentarios">Comentarios :</label>
        <textarea id="comentarios"
            name="comentarios"><?php if(isset($_POST["comentarios"])) echo $_POST["comentarios"];?></textarea>
        <?php if(isset($_POST["btnenviar"]) && $error_comentario)
			{
				echo "* Campo obligatorio *";
			}
			
		?>
        <br /><br />
        <input type="submit" value="Enviar" name="btnenviar" />

    </form>
</body>

</html>


<?php
}
?>