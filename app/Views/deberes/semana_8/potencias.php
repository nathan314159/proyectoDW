<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenciación</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>

<!-- Cuerpo con fondo claro -->
<body class="bg-light">

    <!-- Contenedor principal centrado -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Tarjeta con sombra -->
                <div class="card shadow-lg rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Potenciación</h3>

                        <!-- Formulario con dos campos de entrada -->
                        <form id="formPotencias">
                            <!-- Campo para la base -->
                            <div class="mb-3">
                                <label for="base" class="form-label">Ingrese la base:</label>
                                <input type="number" class="form-control" id="base" placeholder="Ej: 2">
                            </div>

                            <!-- Campo para el límite del exponente -->
                            <div class="mb-3">
                                <label for="limite" class="form-label">Ingrese el exponente máximo:</label>
                                <input type="number" class="form-control" id="limite" placeholder="Ej: 5">
                            </div>

                            <!-- Botón para generar la tabla -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Generar Potencias</button>
                            </div>
                        </form>

                        <hr>

                        <!-- Aquí se mostrarán los resultados -->
                        <div id="res" class="mt-3"></div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SCRIPT: genera las potencias al enviar el formulario -->
    <script>
        // Referencias a los elementos del DOM
        const form = document.getElementById("formPotencias");
        const baseInput = document.getElementById("base");       // input para base
        const limiteInput = document.getElementById("limite");   // input para exponente
        const resDiv = document.getElementById("res");           // contenedor del resultado

        // Al enviar el formulario...
        form.addEventListener("submit", function (e) {
            e.preventDefault(); // Previene recarga de la página

            // Convertir entradas a números
            const base = parseInt(baseInput.value);
            const limite = parseInt(limiteInput.value);
            let salida = "";

            // Verifica si los valores son válidos
            if (isNaN(base) || isNaN(limite) || limite <= 0) {
                resDiv.innerHTML = `<div class="alert alert-danger">Por favor ingrese una base y un exponente válidos (mayores que cero).</div>`;
                return;
            }

            // Construye la lista de potencias
            salida += `<h5 class="mt-3">Potencias de ${base} hasta ${base}^${limite}</h5><ul class="list-group">`;

            for (let i = 1; i <= limite; i++) {
                let potencia = Math.pow(base, i); // base^i
                salida += `<li class="list-group-item">${base}^${i} = ${potencia}</li>`;
            }

            salida += `</ul>`;

            // Muestra el resultado en el div
            resDiv.innerHTML = salida;
        });
    </script>

</body>

</html>
