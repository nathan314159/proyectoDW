<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body,
    html {
        height: 100%;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .container {
        padding: 20px;
        background: beige;
        border: solid;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    p{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 25px;
    }
    .link{
        margin-top: 10px;
    }
</style>

<body>
    <div class="container">
        <h2>Respuesta</h2>
        <p><?= $numero1 ?> + <?= $numero2 ?> = <?= $res ?></p>
    </div>
    <div class="link"><a href="./">Regresar a sumar</a></div>


</body>

</html>