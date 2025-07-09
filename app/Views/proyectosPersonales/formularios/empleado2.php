<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Empleado</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Formulario Empleado</h2>
    <form id="formEmpleado" method="post" action="<?= base_url('proyectos/practica/insertar')?>">
        <label>NOMBRE:</label>
        <input type="text" name="nombre"><br>
        <label>APELLIDO:</label>
        <input type="text" name="apellido"><br>
        <label>TELEFONO:</label>
        <input type="text" name="telefono"><br>
        <button type="submit">Enviar</button>
    </form>

    <div id="mensaje" style="color:green; margin-top:10px;"></div>

    <!-- <script>
        console.log("--------------------");
        $('#formEmpleado').submit(function(e){
            console.log(e);
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('proyectos/insertar-empleado') ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res){
                    if(res.status === 'ok'){
                        $('#mensaje').text(res.mensaje);
                        $('#formEmpleado')[0].reset();
                    }
                }
            });
        });
    </script> -->
</body>
</html>
