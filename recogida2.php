<?php
if(isset($_POST["btnenviar"]))
{
	$error_nombre = $_POST["nombre"]=="";
	$error_comentario = $_POST["comentarios"]=="";
	$error = ($error_nombre || $error_comentario);


	if (!$error) {
		
?>

<!DOCTYPE html>

<head>
    <title>Página de recogida</title>
    <style>
    .rojo {
        color: red;
    }
    </style>
</head>

<body>
    <h1>Estos son los datos enviados</h1>
    <?php
		
		if($_POST["nombre"] == ""){

			echo "<p>No has tecleado nada en el campo nombre</p>";

		}else{

			echo "<p>El nombre enviado ha sido: " . $_POST["nombre"] . "</p>";
			echo "<p>Ha nacido en: " . $_POST["provincia"] . "</p>";
			echo "<p>Su sexo es: " . $_POST["sexo"] . "</p>";

			if(isset($_POST['Aficiones'])){
				$aficiones = $_POST['Aficiones'];
				$numeroElementos = count($aficiones);

				echo "<p class='rojo'>Tus aficiones</p>";
				echo "<ol>";
				for($i = 0; $i < $numeroElementos; $i++){
					echo "<li>". $aficiones[$i] ."</li>";
				}
				echo "</ol>";
			}else{
				echo "<p>No has seleccionado ninguna aficion</p>";
			}

			echo "<p>El comentario ha sido: " . $_POST["comentarios"] . "</p>";
		}

		?>

</body>

</html>

<?php
	}else{

		header("Location: formulario2.php");

	}
}
?>
