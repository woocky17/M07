<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Array en Sesión</title>
</head>
<body>

    <h1>Modificar array guardado en sesión</h1>

    <form action="process.php" method="post">
        <label for="position">Posición a modificar:</label>
        <select id="position" name="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>

        <label for="new_value">Nuevo valor:</label>
        <input type="text" id="new_value" name="new_value"><br>

        <button type="submit" name="modify">Modificar</button>
        <button type="submit" name="average">Promedio</button>
        <button type="submit" name="reset">Reiniciar</button>
    </form>

    <?php
    
    ?>

</body>
</html>
