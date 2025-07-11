<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>vista Novias</h1>




    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>Apellido</td>
            <td>ESTADO</td>
        </tr>
        <?php foreach($datosVista as $key):?>
        <tr>
            
            <td><?= $key["nov_id"]?></td>
            <td><?= $key["nov_nombre"]?></td>
            <td><?= $key["nov_apellido"]?></td>
            <td><?= $key["nov_estado"]?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>