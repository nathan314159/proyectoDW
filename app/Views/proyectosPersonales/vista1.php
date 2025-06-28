<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
    }

    body,
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .contenedor {
        display: flex;
        justify-content: center;
        align-items: center;
        background: beige;
        height: 800px;
        width: 800px;
    }

    .cuadrados {
        gap: 200px;
        display: grid;
        grid-template-columns: repeat(2, 200px); 
        grid-template-rows: repeat(2, 200px);
    }

    .cont {
        height: 200px;
        width: 200px;

    }

    #cuadrado1 {
        background: red;
    }

    #cuadrado2 {
        background: blue;
    }

    #cuadrado3 {
        background: yellowgreen;
    }

    #cuadrado4 {
        background:lightgreen;
    }
    
    .circle{
               height: 100px;
        width: 100px;
        background: coral;
    }
</style>

<body>
    <main>
        <div class="contenedor">
            <div class="cuadrados">
                <div class="cont" id="cuadrado1">
                    <div class="circle" id="circle1"></div>
                </div>
                <div class="cont" id="cuadrado2">
                    <div class="circle" id="circle2"></div>
                </div>
                <div class="cont" id="cuadrado3">
                    <div class="circle" id="circle3"></div>
                </div>
                <div class="cont" id="cuadrado4">
                    <div class="circle" id="circle4"></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>