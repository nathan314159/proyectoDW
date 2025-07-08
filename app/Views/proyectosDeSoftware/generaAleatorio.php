<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Aleatorio</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contenedor {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .titulo h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .personaje span {
            display: inline-block;
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
            min-height: 30px;
            transition: all 0.3s ease-in-out;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <div class="titulo">
            <h1>Genera Aleatorio</h1>
        </div>
        <div class="personaje">
            <span><?= esc($nombre['nombre']) ?></span>
        </div>

        <form method="get" action="<?= base_url('proyectosDeSoftware/generaAleatorio/nombre') ?>">
            <button type="submit">Adivinar</button>
        </form>
        
    </div>

</body>

</html>
