<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/Css/index2styles.css">
</head>

<body>
    <div class="conainter">
    <div class="container mt-5">
        <h2 class="text-center">Conversor de Moneda</h2>
        <form id="conversionForm" onsubmit="return convertir()" class="mt-4">
            <div class="mb-3">
                <input type="number" id="inpConvertidor" class="form-control" placeholder="Ingrese la cantidad" required>
            </div>

            <div class="mb-3">
                <select id="moneda1" class="form-select" required>
                    <option value="" disabled selected>Seleccionar moneda</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EURO</option>
                </select>
            </div>

            <div class="mb-3">
                <select id="moneda2" class="form-select" required>
                    <option value="" disabled selected>Seleccionar moneda</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EURO</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Convertir</button>
        </form>

        <span id="result" class="mt-3 text-center"></span>
    </div>
    </div>

</body>
<script src="public/Js/scriptindex2.js"></script>
</html>
