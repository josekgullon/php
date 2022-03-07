<!DOCTYPE html>

<head>
    <title>Página de recogida</title>
</head>

<body>
    <h1>Estos son los datos enviados</h1>
    <?php
		
		if($_POST["provincia"] == ""){

			echo "<p>No has tecleado nada en el campo nombre</p>";

		}else{

			echo "<p>El nombre enviado ha sido: " . $_POST["nombre"] . "</p>";
			echo "<p>Ha nacido en: " . $_POST["provincia"] . "</p>";
			echo "<p>Su sexo es: " . $_POST["sexo"] . "</p>";
			echo "<p>El comentario ha sido: " . $_POST["comentarios"] . "</p>";
		}

		?>

</body>

</html>