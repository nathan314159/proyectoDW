<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <title></title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Catálogo de Ventas</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <style>
            body {
                background-color: white;
                /* Establece un color de fondo blanco para todo el cuerpo del sitio */
            }

            .contenedor {
                padding: 2rem;
                /* Agrega un espacio interno (padding) de 2 unidades rem alrededor del contenido principal */
            }

            .card {
                width: 18rem;
                /* Define un ancho fijo para todas las tarjetas (cards) */
            }

            .row {
                gap: 1.5rem;
                /* Agrega un espacio (separación) entre columnas dentro del contenedor row */
                justify-content: center;
                /* Centra horizontalmente las columnas dentro de la fila */
            }

            .card img {
                height: 200px;
                /* Define una altura fija de 200 píxeles para las imágenes en las tarjetas */
                object-fit: cover;
                /* Hace que la imagen se recorte para cubrir completamente el área, manteniendo su proporción */
            }
        </style>

    </head>

    <body>
        <!-- Contenedor principal con margen y diseño responsivo -->
        <div class="contenedor container">

            <!-- Título centrado del catálogo -->
            <h2 class="text-center mb-4">Catálogo de Ventas</h2>

            <!-- Fila de Bootstrap con flexbox y ajuste automático para dispositivos pequeños -->
            <div class="row d-flex flex-wrap">

                <div class="col-auto">
                    <div class="card shadow">
                        <img src="<?= base_url('public/img/zapatos-casuales.webp') ?>" class="card-img-top" alt="zapatos-casuales">
                        <div class="card-body">
                            <h5 class="card-title">zapatos casuales</h5>
                            <p class="card-text">Precio: 40.75 $</p>
                            <a href="#" class="btn btn-success">Agregar al carrito</a>
                        </div>
                    </div>
                </div>



            </div> <!-- Fin de la fila -->
        </div> <!-- Fin del contenedor principal -->
    </body>

    </html>
</body>

</html>