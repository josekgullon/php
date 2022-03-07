<DOCTYPE html>
<html>
    <head>
        <title>Ejercicio2</title>
    </head>

    <body>
    <div style="background-color:lightblue; border:solid;padding:5px">
    <h2 align="center">Palindromos /capicuas-Formulario</h2>
    <p>Dime una palabra o un número y te diré si es un palíndromo</p>
        <form method="post">
        <label id="texto1" name="texto1">Palabra o número: 
            <input type="text" id="texto1" name="texto1"/>
 						<?php
						if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]=="")){
							echo ("Campo requerido*");
						}else if(isset($_POST["btncomprobar"]) && strlen($_POST["texto1"])<3){
                                    echo ("Teclee al menos 3 letras");
                                    
                        }
						?>
        </label>

        <br/>
        <br/>
        
        <input type="submit" id="btncomprobar" name="btncomprobar" value="Comprobar">
        </form>
        </div>
        
        <?php 
        error_reporting(0);

        $ltexto1=strlen($_POST["texto1"]);
        $error_texto1=$ltexto1<3;
		if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]!="")&&!$error_texto1){

        $numero=($_POST["texto1"]);
            $result.=$numero[$i];
        }
        
        echo("<br/><br/>
        <div style='background-color:lightgreen; border:solid; padding:5px'>");
		echo("<h2 style='text-align:center'>Palindromos /capicuas-Respuestas</h2>");
        
		if($_POST["texto1"]==$result && is_numeric($_POST["texto1"])){

			echo ("<p>El numero ".$numero." es capicúa</p>");
			}else if($_POST["texto1"]!=$result && is_numeric($_POST["texto1"])){
                
                echo ("<p>El numero ".$numero." no es capicúa</p>");
                
			}else if($_POST["texto1"]==$result && !is_numeric($_POST["texto1"])){
                
			    echo ("<p>La palabra ".$numero." es un palindromo</p>");
			}else{
                echo ("<p>La palabra ".$numero." no es un palindromo</p>");
            }
            echo "</div>";
		}
        ?>
    </body>
</html>


