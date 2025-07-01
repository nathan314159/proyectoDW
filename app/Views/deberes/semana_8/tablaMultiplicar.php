<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body class="bg-light"> <!-- Establece un fondo claro para toda la página -->

    <div class="container py-5"> <!-- Contenedor con padding vertical -->
        <div class="row justify-content-center"> <!-- Fila que centra horizontalmente su contenido -->
            <div class="col-md-6"> <!-- Columna de 6 espacios en pantallas medianas (centrada por el row) -->

                <!-- Tarjeta con sombra y bordes redondeados -->
                <div class="card shadow-lg rounded">
                    <div class="card-body"> <!-- Contenido interno de la tarjeta -->
                        <h3 class="card-title text-center mb-4">Tabla de Multiplicar</h3> <!-- Título centrado -->

                        <!-- Formulario para ingresar un número -->
                        <form id="formTabla">
                            <div class="mb-3"> <!-- Margen inferior para separar del siguiente elemento -->
                                <label for="num" class="form-label">Ingrese un número:</label> <!-- Etiqueta del input -->
                                <input type="number" class="form-control" id="num" placeholder="Ej: 5"> <!-- Input de tipo numérico con clase de estilo Bootstrap -->
                            </div>
                            <div class="d-grid"> <!-- Hace que el botón use todo el ancho disponible -->
                                <button type="submit" class="btn btn-primary">Generar Tabla</button> <!-- Botón azul -->
                            </div>
                        </form>

                        <hr> <!-- Línea horizontal para separar visualmente -->

                        <!-- Contenedor donde se mostrará la tabla generada -->
                        <div id="res" class="mt-3">
                            <!-- Resultado aquí -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <a href="<?= base_url("/deberes/semana8")?>">Regresar a pagina anterior</a>
    </div>

    <!-- Script que maneja la lógica de generar la tabla de multiplicar -->
    <script>
        // Referencias a elementos del DOM
        const botonID = document.querySelector("button"); // Botón "Generar Tabla"
        const numId = document.getElementById("num"); // Campo de entrada del número
        const resId = document.getElementById("res"); // Contenedor donde se mostrarán los resultados
        const form = document.getElementById("formTabla"); // El formulario

        // Evento al enviar el formulario
        form.addEventListener("submit", (e) => {
            e.preventDefault(); // Evita que se recargue la página al enviar el formulario

            const val = parseInt(numId.value); // Obtiene el valor del input y lo convierte en entero
            let respuesta = ""; // Variable que acumulará la tabla HTML

            // Si no es un número válido, muestra una alerta
            if (isNaN(val) || val < 0) {
                resId.innerHTML = `<div class="alert alert-danger">Por favor ingrese un número válido.</div>`;
                return;
            }

            // Construye la tabla como lista de Bootstrap
            respuesta += `<h5 class="mt-3">Tabla del ${val}</h5><ul class="list-group">`;
            for (let i = 1; i <= 12; i++) {
                respuesta += `<li class="list-group-item">${i} × ${val} = ${i * val}</li>`;
            }
            respuesta += `</ul>`;

            // Inserta la tabla generada en el contenedor
            resId.innerHTML = respuesta;
        });
    </script>

</body>


</body>

</html>