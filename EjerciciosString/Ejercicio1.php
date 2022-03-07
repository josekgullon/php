<?php

if(isset($_POST["btncomparar"]))
{
	$ltexto1=strlen($_POST["texto1"]);
	$ltexto2=strlen($_POST["texto2"]);

	$error_texto1=$ltexto1<3;
	$error_texto2=$ltexto2<3;

	$errores=$error_texto1||$error_texto2;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 1</title>
		<meta charset="UTF-8"/>
	</head>
	<body>		
		<div style="background-color:lightblue; border:solid; padding:5px">
			<form method="post" action="Ejercicio1.php">
				<h2 style='text-align:center'>Ripios - Formulario</h2>
				<p> Dime dos palabras y te diré si riman o no.</p>

				<label for="texto1">Primera palabra: </label>
				<input type="text" name="texto1" id="texto1" value="<?php if(isset($_POST["texto1"])) echo $_POST["texto1"];?>"/>
				<?php 
				if(isset($_POST["texto1"]))
				{
					if($_POST["texto1"]=="")
					{
					echo "* Campo obligatorio *";
					}		 
					else if($error_texto1)
					{
					echo "Teclee al menos 3 letras";
					}
				}			
				?>
			<br/><br/>
			<label for="texto2">Segunda palabra:</label>
			<input type="text" id="texto2" name="texto2" value="<?php if(isset($_POST["texto2"])) echo $_POST["texto2"];?>"/>
				<?php if(isset($_POST["texto2"]))
			{

				if($_POST["texto2"]=="")
				{
				echo "* Campo obligatorio *";
				}		 
				else if($error_texto2)
				{
				echo "Teclee al menos 3 letras";
				}
			}
				
			?>
				<br/><br/>
				<input type="submit" value="Comparar" name="btncomparar"/>
				<br/><br/>
			</form>
			</div>
		<?php
			if(isset($_POST["btncomparar"]) && !$errores)
			{
				$texto1=strtoupper($_POST["texto1"]);
				$texto2=strtoupper($_POST["texto2"]);

				$respuesta="no riman";

				if($texto1[$ltexto1-1]==$texto2[$ltexto2-1] && $texto1[$ltexto1-2]==$texto2[$ltexto2-2])
				{
					$respuesta="riman un poco";

					if($texto1[$ltexto1-3]==$texto2[$ltexto2-3])
					{
						$respuesta="riman";
					}
				}

                echo("<br/><br/>
                      <div style='background-color:lightgreen; border:solid; padding:5px'>");
				echo("<h2 style='text-align:center'>Ripios - Formulario</h2>");
				echo "<p>Las palabras <strong>".$_POST['texto1']."</strong> y <strong>".$_POST['texto2']."</strong> ".$respuesta."</p>";
				echo "</div>";
			}
		?>
	</body>
</html>