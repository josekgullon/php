<DOCTYPE html>
<html>
    <head>
        <title>Ejercicio3</title>
    </head>

    <body>
    <div style="background-color:lightblue; border:solid;padding:5px">
    <h2 align="center">Frases palíndromas - Formulario</h2>
    <p>Dime una frase y te diré si es un palíndromo</p>
        <form method="post">
        <label id="texto1" name="texto1">Frase: 
            <input type="text" id="texto1" name="texto1"/>
 						<?php
						if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]=="")){

                            echo ("Campo requerido*");
                            
						}else if(isset($_POST["btncomprobar"]) && strlen($_POST["texto1"])<3){

                            echo ("Teclee al menos 3 letras");
                                    
                        }else if(isset($_POST["btncomprobar"]) && is_numeric($_POST["texto1"])){

                            echo ("Teclea una frase no un número");
                        }
						?>
        </label>

        <br/>
        <br/>
        
        <input type="submit" id="btncomprobar" name="btncomprobar" value="Comprobar"/>
        </form>
        </div>
        
        <?php 
        error_reporting(1);
        
        
        $ltexto1=strlen($_POST["texto1"]);
        $error_texto1=$ltexto1<3;
        $error_numero=is_numeric($_POST["texto1"]);

		if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]!="") && !$error_texto1 && !$error_numero){

        $textito=($_POST["texto1"]);
        
        $unido=str_replace(" ", "",$textito);

        for($i=strlen($unido);$i>=0;$i--)
        {
            $result.=$unido[$i];
        }
        
        echo("<br/><br/>
        <div style='background-color:lightgreen; border:solid; padding:5px'>");
		echo("<h2 style='text-align:center'>Palindromos /capicuas - Respuestas</h2>");
        
		if($unido==$result){
            echo ("<p>La frase '".$textito."' es palindroma</p>");
			}else if($_POST["texto1"]!=$result){
                echo ("<p>La frase '".$textito."' no es palíndroma</p>");
			    
			}
            echo "</div>";
		}
        ?>
    </body>
</html>





