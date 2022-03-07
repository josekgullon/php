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
    <h1>RECOGIDA DE DATOS</h1>
    <?php
		if($_POST['nombre'] == ""){
			echo "<p>No has introducido el nombre</p>";
		}else{
			echo "<p>El nombre es: " . $_POST['nombre'] . "</p>";
		}

		echo "<p>El nombre es: " . $_POST['provincia'] . "</p>";
	?>
</body>

</html>
<?php
	}else{
		header('Location: formularioPOST.html');
	}
?>