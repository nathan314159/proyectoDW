<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <form action="<?= base_url('proyectos/practica/estudiante') ?>" method="post">
            <div class="nombre">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </div>
            <div class="apellido">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido">
            </div>
            <div class="cedula">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula">
            </div>
            <div class="telf">
                <label for="telf">Telefono</label>
                <input type="text" name="telf">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!--Mostrar Estudiantes-->

    <div class="mostrar-estudiantes">
        <h2>Lista de Estudiantes</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                </tr>
            </thead>

            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($estudiantes as $est): ?>
                    <tr>
                        <td><?= esc($est['estudiante_nombre']) ?></td>
                        <td><?= esc($est['estudiante_apellido']) ?></td>
                        <td><?= esc($est['estudiante_cedula']) ?></td>
                        <td><?= esc($est['estudiante_telf']) ?></td>
                        <td>
                            <!-- Delete button -->
                            <form action="<?= base_url('proyectos/practica/estudiante/' . $est['id_estudiante']) ?>" method="post" onsubmit="return confirm('¿Seguro que deseas eliminar?');">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

    </div>
</body>

</html>