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
    <?php $y=calculaEdad();?>
    <form action="" method="get">
        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder=<?= $y ?>>
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
                    <button type="submit" name="boton">Enviar</button>
                </td>
            </tr>
        </table>
    </form>
    <?php if(isset($_GET["boton"])):?>
    <?php $nombre = depurarTexto($_GET["nombre"]); $apellido = depurarTexto($_GET["apellido"]); ?>
        <p><?= $nombre ." " . $apellido; ?></p>
        <p>Tu edad actual es: <?= $y ?></p> 
       
    <?php endif; ?>
   
    
</body>
</html>