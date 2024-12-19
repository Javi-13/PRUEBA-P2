<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Clics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: lightblue;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            margin: 50px auto;
        }

        .btn-counter {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
        }

        .counter-display {
            width: 70px;
            height: 50px;
            font-size: 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>¡Contador de Clics!</h2>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <button id="restar" class="btn btn-danger btn-counter">-</button>
            <input id="counter" class="mx-3 counter-display form-control" type="text" value="10" readonly>
            <button id="aumentar" class="btn btn-success btn-counter">+</button>
        </div>
    </div>

    <script>
        var contador = 10;
        var inpContable = document.getElementById("counter");
        var btnaumenta = document.getElementById("aumentar");
        var btndecrece = document.getElementById("restar");

        function actualizarContador() {
            inpContable.value = contador;

        //Verificar si el contador llega a 20, redireccionar a Index2
            if (contador == 20) {
                window.location.href = "http://localhost/Parcial2DW/Index2-CFormF1";
            }
        };

        btnaumenta.addEventListener('click', function() {
            if (contador < 20) {
                contador++;
                actualizarContador();
            }
        });


        btndecrece.addEventListener('click', function() {
            if (contador > 0) {
                contador--;
                actualizarContador();
            }
        });

        actualizarContador();
    </script>
</body>

</html>