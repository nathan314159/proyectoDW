<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>
<style>
    html{
        height: 100%;
    }
    body{
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .container {
        width: 600px;
        padding: 20px;
        background-color: lightgray;
        margin: 10px;
        border-radius: 10px;
    }


</style>

<body>

    <div class="container">
        <h2>Formulario Empleados</h2>
        <form id="empleadoForm" action="empleado/post" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <div class="container-table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $emp): ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?=$emp['nombre']?> </td>
                    <td> <?=$emp['apellido']?> </td>
                    <td> <?=$emp['telf']?> </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>



<script>
$(document).ready(function(){
  $('#empleadoForm').submit(function(e){
    e.preventDefault(); // prevent normal form submit

    // Collect form data
    var formData = $(this).serialize();

    $.ajax({
      url: $(this).attr('action'), // form action URL
      type: 'POST',
      data: formData,
      success: function(response) {
        // Assuming server returns JSON with new employee data and full updated list
        
        // Example response:
        // { success: true, empleado: { nombre: 'Juan', apellido: 'Perez', telf: '1234567890' }, empleados: [ ... ] }
        
        if(response.success) {
          // Clear inputs
          $('#empleadoForm')[0].reset();

          // Update table dynamically
          var rows = '';
          var contador = 1;
          $.each(response.empleados, function(index, emp){
            rows += `<tr>
              <th scope="row">${contador++}</th>
              <td>${emp.nombre}</td>
              <td>${emp.apellido}</td>
              <td>${emp.telf}</td>
            </tr>`;
          });
          $('#empleadosTableBody').html(rows);
        } else {
          alert('Error saving employee.');
        }
      },
      error: function() {
        alert('Error sending AJAX request.');
      }
    });
  });
});
</script>

</html>