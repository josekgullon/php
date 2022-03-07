<!DOCTYPE html>
<html lang="es">

<head>
    <title>PRIMERA PÁGINA</title>
    <meta charset="UTF-8" />
</head>

<body>
    <?php
				/*Esto es un comentario de varias líneas*/
				//Esto es un comentario de una línea
				$var_1 = "Fran";
				$var_2 = "Juan";
				$resultado = $var_1 . " " . $var_2; //Concatena cadenas
				$var_3 = 7;
				/*Echo muestra lo que pongas*/
				echo "<h1>Mi primera página de PHP" . $var_3 ."</h1>"; 
				
				echo "<p>Y mi nombre compuesto es: " . $resultado ."</p>";
				
				/*Operadores MATEMÁTICOS*/ 
				$var_4 = (5+9-7*9/2);
				
				//IF Y NOT. OPERADORES LÓGICOS
				if($var_4 % 2 == 0 && $var_4 > 0) //AND IGUAL QUE JAVA
				{
					echo "<p>El número " .$var_4 . " es par y positivo</p>";
				}
				//ELSE IF IGUAL QUE JAVA
				else if($var_4 < 0 || $var_4 == 0) //OR IGUAL QUE JAVA
				{
					echo "<p>El número " .$var_4 . " es impar y negativo</p>";
				}
				else
				{
					echo "<p>No hay ningún número</p>";
				}
				
				//SWITCH
				$var_5 = "Martes";
				
				switch($var_5){
					
					case "Lunes" :
						echo "<p>Día " . $var_5 . "</p>";
					break; //IMPORTANTE
						
					case "Martes" :
						echo "<p>Día " . $var_5 . "</p>";
					break; //IMPORTANTES
						
					default :
						echo "<p>Día " . $var_5 . "</p>";
				
				}
				
				//BUCLES 
				//FOR
				$var_6 = 1;
				
				//Si quiero sumar de 3 en 3 seria asi 
				/*for($var_6 = 0; $var_6 = 5; $var_6 = $var_6+3)*/
				
				for($var_6 = 0; $var_6 < 5; $var_6++){
					
					echo "<p> " . $var_6 . "</p>";
				}
				
				
				//WHILE
				$var_7 = 1;
				
				while($var_7 < 7){
				
					echo "<p> " . $var_7 . "</p>";
					$var_7++;
				}
		
				
				//DO WHILE
				do{
					
					echo "<p> " . $var_7 . "</p>";
					$var_7++;
				
				}while($var_7 < 8);
				
			?>
</body>

</html>