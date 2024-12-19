<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres en Raya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 30rem;
            margin: 3rem auto;
            padding: 1.5rem;
            background-color: #f5f5f5;
            border: 2px solid #007bff;
            border-radius: 0.5rem;
        }

        .board {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.625rem;
            margin: 1.25rem 0;
        }

        input {
            width: 100%;
            height: 5rem;
            font-size: 2rem;
            text-align: center;
            border: 2px solid #000;
            border-radius: 0.3125rem;
        }

        .btn-container {
            text-align: center;
            margin-top: 1.25rem;
        }

        .btn-container button {
            margin: 0.5rem;
        }

        #mensaje {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 1.25rem;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container">
    <button class="btn btn-primary" id="boton-formulario1" onclick="window.location.href='http://localhost/Parcial2DW/Index1-CVistaF1'">Formulario 1</button>
    <button class="btn btn-primary" id="boton-formulario2" onclick="window.location.href='http://localhost/Parcial2DW/Index2-CFormF1'">Formulario 2</button>
        <h2 class="text-center mt-3">TRES EN LÍNEA</h2>

        <!-- Cuadrícula del juego -->
        <div class="board">
            <input type="text" id="celda-0" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 0)">
            <input type="text" id="celda-1" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 1)">
            <input type="text" id="celda-2" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 2)">
            <input type="text" id="celda-3" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 3)">
            <input type="text" id="celda-4" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 4)">
            <input type="text" id="celda-5" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 5)">
            <input type="text" id="celda-6" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 6)">
            <input type="text" id="celda-7" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 7)">
            <input type="text" id="celda-8" class="celda form-control" maxlength="1" oninput="validarEntrada(event, 8)">
        </div>

        <div class="btn-container">
            <button class="btn btn-success" id="boton-jugar">Jugar</button>
            <button class="btn btn-danger" id="boton-reiniciar">Reiniciar</button>
        </div>

        <div id="mensaje"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="public/Js/scriptindex3.js"></script>
</body>
</html>
