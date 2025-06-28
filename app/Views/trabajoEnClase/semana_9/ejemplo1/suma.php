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

    body,
    html {

        height: 100%;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    .contenedor {
        display: flex;
        justify-content: center;
        align-items: center;

        background: beige;
        flex-direction: column;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 30px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    button {
        padding: 10px;
        background-color: teal;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: darkcyan;
    }
</style>



<body>
    <div class="contenedor">
        <h2>Suma de dos numeros</h2>
        <div class="suma">
            <form action="<?= base_url("/suma/respuesta")?>" method="post">
                <div class="num1">
                    <label for="num1">Ingrese Numero 1</label>
                    <input type="text" name="num1" id="num1" placeholder="Ingrese una numero...">
                </div>
                <div class="num2">
                    <label for="num2">Ingrese Numero 2</label>
                    <input type="text" name="num2" id="num2" placeholder="Ingrese una numero...">
                </div>
                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>
</body>

</html>