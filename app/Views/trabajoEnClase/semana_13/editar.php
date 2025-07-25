<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="select1()">

    <h1>editar</h1>

    <form action="<?= base_url('trabajos/usuarios/guardar/') ?>" method="get">
        <input type="text" value="<?= esc($usuario['usu_id']) ?>">
        <input type="text" name="nombre" value="<?= esc($usuario['usu_nombre']) ?>">
        <input type="text" value="<?= esc($usuario['usu_correo']) ?>">
        <input type="text" value="<?= esc($usuario['usu_cedula']) ?>">

        <select name="" id="departamentos">
            <?php foreach ($departamentos as $dep): ?>
                <option value="<?= $dep['dep_id'] ?>"><?= $dep['dep_nombre'] ?></option>
            <?php endforeach; ?>

        </select>

        <select name="" id="ciudades">
            <?php foreach ($ciudades as $ciu): ?>
                <option value="<?= $ciu['ciu_id'] ?>"><?= $ciu['ciu_nombre'] ?></option>
            <?php endforeach; ?>

        </select>

        <select name="" id="provincia">
            <?php foreach ($provincias as $pro): ?>
                <option value="<?= $pro['pro_id'] ?>"><?= $pro['pro_nombre'] ?></option>
            <?php endforeach; ?>

        </select>

        <select name="" id="estado">
            <?php foreach ($estados as $est): ?>
                <option value="<?= $est['est_id'] ?>"><?= $est['est_nombre'] ?></option>
            <?php endforeach; ?>

        </select>
        <button type="submit">Guadar</button>

    </form>
</body>

<script>
    function select1() {
        const dep = document.getElementById("departamentos");
        const ciu = document.getElementById("ciudades");
        const pro = document.getElementById("provincia");
        const est = document.getElementById("estado");
        dep.value = <?= $id2 ?>;
        ciu.value = <?= $id3 ?>
        pro.value = <?= $id4 ?>
        est.value = <?= $id5 ?>
    }
</script>

</html>