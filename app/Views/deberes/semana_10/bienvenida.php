<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de Productos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background: #f0f0f0;
            padding: 20px;
        }

        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contenedor h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .matris {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 900px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .img {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .img img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
        }

        @media (max-width: 600px) {
            .img img {
                height: 150px;
            }
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>Bienvenido</h1>
        <div class="matris">
            <div class="img">
                <img src="<?= base_url('public/img/cartera de hombro.webp') ?>" alt="cartera de hombro">
                <a href="<?=base_url('deberes/semana10/carteras/1')?>">cartera de hombro</a>
            </div>
            <div class="img">
                <img src="<?= base_url('public/img/cartera de mano.webp') ?>" alt="cartera de mano">
                <a href="<?=base_url('deberes/semana10/carteras/2')?>">cartera de mano</a>
            </div>
            <div class="img">
                <img src="<?= base_url('public/img/vestido de fiesta.webp') ?>" alt="vestido de fiesta">
                <a href="<?=base_url('deberes/semana10/vestidos/1')?>">vestido de fiesta</a>
            </div>
            <div class="img">
                <img src="<?= base_url('public/img/vestido formal.webp') ?>" alt="vestido formal">
                <a href="<?=base_url('deberes/semana10/vestidos/2')?>">vestido formal</a>
            </div>
            <div class="img">
                <img src="<?= base_url('public/img/zapatos-casuales.webp') ?>" alt="zapatos-casuales">
                <a href="<?=base_url('deberes/semana10/zapatos/1')?>">zapatos casuales</a>
            </div>
            <div class="img">
                <img src="<?= base_url('public/img/zapatos-deportivos.webp') ?>" alt="zapatos-deportivos">
                <a href="<?=base_url('deberes/semana10/zapatos/2')?>">zapatos deportivos</a>
            </div>
        </div>
    </div>
</body>

</html>
