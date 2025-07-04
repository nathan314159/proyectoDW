<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .contenedor {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: wheat;

    }

    .descripcion {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    p {
        padding: 30px;
        max-width: 600px;
        text-align: center;
    }

    main {
        display: flex;
        flex-direction: column;
        width: 400px;
        height: 510px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        overflow: hidden;
        background: white;
    }

    button {
        height: 35px;
        width: 75px;
        border-radius: 5px;
        background-color: lightgreen;
        margin: 10px;
    }

    button:hover {
        background-color: greenyellow;
    }

    .span {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
</style>

<body>
    <main>

        <div class="contenedor">
            <h1>Card</h1>
            <div class="image">
                <img src="<?= base_url("public/img/semana10/pizza.jpg") ?>" alt="pizza">
            </div>
            <div class="descripcion">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolores assumenda sapiente natus in cumque a est fugit itaque alias debitis, repudiandae aliquid. Laudantium voluptatum facilis dolor sint dolorem labore!</p>
            </div>

            <div class="btn">
                <button>Enviar</button>
            </div>


        </div>
        <div class="span"><span>hola</span></div>
    </main>


</body>

</html>