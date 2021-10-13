<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacimiento</title>
    <style>
        table,tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php require("auxiliar.php") ?>
    <form action="" method="get">
        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </td>
            </tr>
            <tr>
                <td>
                <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fecha">Fecha de nacimiento:</label>
                     <input type="date" name="fechanacimiento" id="fecha">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </form>
    <p><?php ?></p> 
</body>
</html>