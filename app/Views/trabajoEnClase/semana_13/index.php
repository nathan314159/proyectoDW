<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .activo {
            color: green;
            font-weight: bold;
        }

        .pasivo {
            color: red;
            font-weight: bold;
        }

        .acciones a {
            padding: 4px 8px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
        }

        .acciones a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h2>Usuarios Registrados</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Provincia</th>
                <th>Estado</th>
                <th hidden>ID Dep.</th>
                <th hidden>ID Ciudad</th>
                <th hidden>ID Provincia</th>
                <th hidden>ID Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)) : ?>
                <?php foreach ($usuarios as $index => $usuario) : ?>
                    <tr>
                        <td><?= esc($usuario['usu_id']) ?></td>
                        <td><?= esc($usuario['usu_nombre']) ?></td>
                        <td><?= esc($usuario['usu_cedula']) ?></td>
                        <td><?= esc($usuario['usu_correo']) ?></td>
                        <td><?= esc($usuario['departamento']) ?></td>
                        <td><?= esc($usuario['ciudad']) ?></td>
                        <td><?= esc($usuario['provincia']) ?></td>
                        <td class="<?= strtolower($usuario['estado']) ?>">
                            <?= esc($usuario['estado']) ?>
                        </td>

                        <!-- Campos ocultos -->
                        <td hidden><?= esc($usuario['id_departamento']) ?></td>
                        <td hidden><?= esc($usuario['id_ciudad']) ?></td>
                        <td hidden><?= esc($usuario['id_provincia']) ?></td>
                        <td hidden><?= esc($usuario['id_estado']) ?></td>

                        <td class="acciones">
                            <a href="<?= base_url('trabajos/usuarios/editar/' . $usuario['usu_id'] . "/" . $usuario['id_departamento'] . "/" . $usuario['id_ciudad'] . "/" . $usuario['id_provincia']. "/" . $usuario['id_estado']) ?>">Actualizar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="13">No se encontraron usuarios.</td>
                </tr>
            <?php endif; ?>
        </tbody>

    </table>

</body>

</html>