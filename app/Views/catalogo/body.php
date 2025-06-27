<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap in CodeIgniter</title>

    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">

</head>

<style>
    body {
        background-color: #f8f9fa;
    }
</style>
</head>

<body>

    <main class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="w-100" style="max-width: 400px;">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Formulario</h4>
                    <form action="#">
                        <div class="mb-3">
                            <label for="num1" class="form-label">Ingrese número 1</label>
                            <input type="text" class="form-control" id="num1" placeholder="Número 1">
                        </div>
                        <div class="mb-3">
                            <label for="num2" class="form-label">Ingrese número 2</label>
                            <input type="text" class="form-control" id="num2" placeholder="Número 2">
                        </div>
                        <div class="d-grid">
                            <button id="button" type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                    <div class="respuesta mt-3 text-center">
                        <span class="text-success fw-bold" id="res"></span>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
<script>
    const num1ID = document.getElementById("num1");
    const num2ID = document.getElementById("num2");
    const buttonID = document.getElementById("button");
    const resID = document.getElementById("res");

    buttonID.addEventListener("click", (e) => {
        const val1 = parseInt(num1ID.value);
        const val2 = parseInt(num2ID.value);

        const suma = val1 + val2;
        resID.textContent = suma;
    })
</script>

</html>