<DOCTYPE html>
<html>
    <head>
        <title>Ejercicio4</title>
    </head>

    <body>
        <div style="background-color:lightblue; border:solid;padding:5px">
         <h2 align="center">Romanos a árabes - Formulario</h2>
         <p>Dime un numero en números romanos y lo convertiré a cifras árabes</p>
         
     <form method="post">
        <label id="texto1" name="texto1">Número: 
            <input type="text" id="texto1" name="texto1"/>
 						<?php
						if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]=="")){

                            echo ("Campo requerido*");
                            
						}else if(isset($_POST["btncomprobar"]) && is_numeric($_POST["texto1"])){

                            echo ("Teclea en romano no en árabe");
                            
                        }
						?>
        </label>
        <br/>
        <br/>
        
        <input type="submit" id="btncomprobar" name="btncomprobar" value="Convertir"/>
        </form>
        </div>

        <?php
        error_reporting(1);
        $error_numero=is_numeric($_POST["texto1"]);
        
        if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]!="") && !$error_texto1 && !$error_numero){
            $textito=$_POST["texto1"];
            
            $mayusculas=strtoupper($textito);
            
            echo("<br/><br/>
            <div style='background-color:lightgreen; border:solid; padding:5px'>");

            echo("<h2>Romanos y árabes - Respuestas</h2>");
            $suma=0;
            $separados = str_split($mayusculas);

            foreach ($separados as $caracteres => $valor){
                switch ($valor){
                    case 'I':
                        $suma++;
                        break;
                    case 'V':
                        $suma += 5;
                        break;
                    case 'X':
                        $suma += 10;
                        break;
                    case 'L':
                        $suma += 50;
                        break;
                    case 'C':
                        $suma += 100;
                        break;
                    case 'D':
                        $suma += 500;
                        break;
                    case 'M':
                        $suma += 1000;
                        break;
                    default:
                      $error_suma = true;
                }
            }

            if(!$error_suma && $suma <= 5000){
                echo ("<p>".$suma."</p>");
            }else{
                echo "<p>Error</p>";
            }

            echo "</div>";
            
        }
        ?>
    </body>
</html>
