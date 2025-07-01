<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body,
html {
  height: 100%;
  margin: 0;
}

body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

.form-wrapper {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contenedor {
  background: beige;
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
    <div class="form-wrapper">
    <div class="contenedor">
      <h2>Suma de dos números</h2>
      <div class="suma">
        <form action="<?= base_url("/trabajos/semana9/suma/respuesta") ?>" method="post">
          <div class="num1">
            <label for="num1">Ingrese Número 1</label>
            <input type="text" name="num1" id="num1" placeholder="Ingrese un número...">
          </div>
          <div class="num2">
            <label for="num2">Ingrese Número 2</label>
            <input type="text" name="num2" id="num2" placeholder="Ingrese un número...">
          </div>
          <button type="submit">Calcular</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>