<DOCTYPE html>
<html>
    <head>
        <title>Ejercicio5</title>
    </head>

    <body>
        <div style="background-color:lightblue; border:solid;padding:5px">
         <h2 align="center">Romanos a árabes - Formulario</h2>
         <p>Dime un numero en árabe y lo convertiré a cifras romanas</p>
         
     <form method="post">
        <label id="texto1" name="texto1">Número: 
            <input type="text" id="texto1" name="texto1"/>
 						<?php
						if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]=="")){

                            echo ("Campo requerido*");
                            
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

        $error_numero=is_numeric($_POST["texto1"]);;
        
        if(isset($_POST["btncomprobar"])&& ($_POST["texto1"]!="") && !$error_texto1){
            $textito=$_POST["texto1"];
            
            $mayusculas=strtoupper($textito);
            
            echo("<br/><br/>
            <div style='background-color:lightgreen; border:solid; padding:5px'>");

            echo("<h2>Romanos y árabes - Respuestas</h2>");


                $table = array('M'=>1000, 'D'=>500, 'C'=>100, 
                               'L'=>50, 'X'=>10,   
                               'V'=>5, 'I'=>1);
                $return = '';
                while($mayusculas > 0) 
                {
                    foreach($table as $rom=>$arb) 
                    {
                        if($mayusculas >= $arb)
                        {
                            $mayusculas -= $arb;
                            $return .= $rom;
                            break;
                        }
                    }
                }
            
            
            
            echo ("$return");
            echo ("</div>");
        }
        ?>
    </body>
</html>