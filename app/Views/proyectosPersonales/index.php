<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
    }

    .contenedor {
      padding: 8rem;
    }

    .row.mt-4 {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .card {
      width: 18rem;
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <div class="row mt-4">
      <div class="col-auto">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Juego de cajas</h5>
            <p class="card-text">se mueve la caja en una dimension 2D con las flechas.</p>
            <a href="<?= base_url('proyectos/juego') ?>" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Estilo cuadrado</h5>
            <p class="card-text">Es un diseño de cuadrados, lo quee con el fin de entender los divs anidados.</p>
            <a href="<?= base_url('proyectos/estilo') ?>" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
