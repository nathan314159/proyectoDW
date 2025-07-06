<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .contenedor {
        text-align: center;
        height: 500px;

    }

    .mensaje {
        height: 100px;
        background: lightcoral;
        padding: 30px;
        margin: 50px;
        border-radius: 10px;

    }
</style>

<body>
    <main class="main-error">
        <div class="contenedor">
            <div class="mensaje">
                <h1>Parece que hubo un error: el usuario o la clave no son correctos</h1>
            </div>

            <img src="<?= base_url('public/semana10Login/images/claveError.webp') ?>" alt="Clave incorrecta">
            <div><a href="<?= base_url('deberes/semana10') ?>">Regresar al login</a></div>

        </div>
    </main>


</body>

</html>