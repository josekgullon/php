<DOCTYPE html>

    <head>
        <title>FORMULARIO</title>
    </head>

    <body>
        <h1>Esta es mi super página</h1>
        <form method="post" action="recogida2.php">
            <p>Nombre: <input type="text" name="nombre"></input></p>

            <p>Nacido en: <select name="provincia">
                    <option>Málaga</option>
                    <option>Granada</option>
                    <option>Cadiz</option>
                </select>
            </p>

            <p>Sexo: Hombre <input type="radio" name="sexo" value="Hombre" required>
                Mujer <input type="radio" name="sexo" value="Mujer">
            </p>

            <p>Aficiones: Deportes
                <input type="checkbox" name="Aficiones[]" value="Deportes"></input>
                Lectura<input type="checkbox" name="Aficiones[]" value="Lectura"></input>
                Otros<input type="checkbox" name="Aficiones[]" value="Otros"></input>
            </p>

            <p>Comentarios: <textarea name="comentarios" rows="5" cols="30"></textarea></p>

            <p><button type="submit" value="Enviar" name="btnEnviar">Enviar</button></p>
        </form>
    </body>

    </html>