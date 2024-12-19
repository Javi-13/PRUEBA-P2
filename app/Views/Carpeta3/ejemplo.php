<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres en Raya</title>
    <!-- Enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 5px;
            justify-content: center;
            margin-top: 50px;
        }
        .cell {
            width: 100px;
            height: 100px;
            border: 2px solid #333;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            cursor: pointer;
            background-color: #f8f9fa;
        }
        .cell.x {
            color: blue;
        }
        .cell.o {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Juego Tres en Raya</h2>

        <!-- Tablero de Tres en Raya -->
        <div class="board">
            <div class="cell" id="cell-0"></div>
            <div class="cell" id="cell-1"></div>
            <div class="cell" id="cell-2"></div>
            <div class="cell" id="cell-3"></div>
            <div class="cell" id="cell-4"></div>
            <div class="cell" id="cell-5"></div>
            <div class="cell" id="cell-6"></div>
            <div class="cell" id="cell-7"></div>
            <div class="cell" id="cell-8"></div>
        </div>

        <!-- Botones para jugar o reiniciar -->
        <div class="text-center mt-4">
            <button class="btn btn-success" id="startGame">Jugar</button>
            <button class="btn btn-danger" id="resetGame" style="display:none;">Reiniciar</button>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS (opcional para interacciones adicionales) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        let currentPlayer = 'x'; // El jugador empieza con 'X'
        const cells = document.querySelectorAll('.cell');
        const startButton = document.getElementById('startGame');
        const resetButton = document.getElementById('resetGame');

        // Función para empezar el juego
        startButton.addEventListener('click', function() {
            startButton.style.display = 'none'; // Ocultamos el botón de "Jugar"
            resetButton.style.display = 'inline-block'; // Mostramos el botón de "Reiniciar"
            resetBoard();
        });

        // Función para reiniciar el juego
        resetButton.addEventListener('click', function() {
            resetBoard();
        });

        // Función para limpiar el tablero
        function resetBoard() {
            cells.forEach(cell => {
                cell.textContent = ''; // Limpiar las celdas
                cell.classList.remove('x', 'o'); // Eliminar estilos de X y O
                cell.style.pointerEvents = 'auto'; // Habilitar las celdas para hacer clic
            });
            currentPlayer = 'x'; // Empezar con 'X'
        }

        // Función para manejar el clic en una celda
        cells.forEach(cell => {
            cell.addEventListener('click', function() {
                if (cell.textContent !== '') {
                    return; // Si ya está ocupada, no hacer nada
                }

                if (currentPlayer === 'x') {
                    cell.textContent = 'X';
                    cell.classList.add('x');
                    if (checkWinner()) return;
                    currentPlayer = 'o';
                    playO(); // Después de X, se juega O
                } else {
                    alert('Solo X puede jugar primero');
                }
            });
        });

        // Función para que O juegue automáticamente
        function playO() {
            const emptyCells = Array.from(cells).filter(cell => cell.textContent === '');
            if (emptyCells.length > 0) {
                const randomCell = emptyCells[Math.floor(Math.random() * emptyCells.length)];
                randomCell.textContent = 'O';
                randomCell.classList.add('o');
                if (checkWinner()) return;
                currentPlayer = 'x';
            }
        }

        // Función para comprobar si hay un ganador
        function checkWinner() {
            const winningCombinations = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8], // Filas
                [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columnas
                [0, 4, 8], [2, 4, 6]             // Diagonales
            ];

            for (const combo of winningCombinations) {
                const [a, b, c] = combo;
                const cellA = cells[a];
                const cellB = cells[b];
                const cellC = cells[c];

                if (cellA.textContent && cellA.textContent === cellB.textContent && cellA.textContent === cellC.textContent) {
                    alert(`¡El jugador ${cellA.textContent} ha ganado!`);
                    resetBoard();
                    return true;
                }
            }

            if (Array.from(cells).every(cell => cell.textContent !== '')) {
                alert('¡Es un empate!');
                resetBoard();
            }

            return false;
        }
    </script>
</body>
</html>
