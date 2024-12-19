let jugadorTurno = "X";  
let juegoActivo = true;

const celdasJuego = Array.from(document.querySelectorAll(".celda")); 
const botonIniciar = document.getElementById("boton-jugar");
const botonReiniciar = document.getElementById("boton-reiniciar");
const divMensaje = document.getElementById("mensaje");

botonReiniciar.addEventListener("click", reiniciarJuego);
botonIniciar.addEventListener("click", iniciarTurnoJugador);

// Lógica para manejar el turno del jugador
function realizarJugada(index) {
    if (!juegoActivo) return;

    const celdaSeleccionada = celdasJuego[index];

    // Si la celda ya tiene valor, no hacer nada
    if (celdaSeleccionada.value !== "") {
        return;
    }

    // Colocar la "X" del jugador
    celdaSeleccionada.value = jugadorTurno;
    verificarGanador();

    // Si el juego sigue activo, la computadora coloca "O"
    if (juegoActivo) {
        jugadorTurno = "O";
        colocarOComputadora();
        verificarGanador();
    }
}

// Función para jugar el turno manualmente (cuando se da clic en el botón de Jugar)
function iniciarTurnoJugador() {
    if (jugadorTurno === "X") {
        divMensaje.innerHTML = `<span>Es el turno de ${jugadorTurno}</span>`;
        celdasJuego.forEach((celda, index) => {
            if (celda.value === "") {
                celda.addEventListener("click", () => {
                    realizarJugada(index);
                });
            }
        });
    }
}

// Función que coloca "O" en un espacio vacío aleatorio
function colocarOComputadora() {
    const celdasVacías = celdasJuego.filter(celda => celda.value === "");
    if (celdasVacías.length > 0) {
        const celdaAleatoria = celdasVacías[Math.floor(Math.random() * celdasVacías.length)];
        celdaAleatoria.value = "O";
        jugadorTurno = "X"; 
    }
}

// Lógica para verificar si hay un ganador
function verificarGanador() {
    const combinacionesGanadoras = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8],
        [0, 3, 6], [1, 4, 7], [2, 5, 8], 
        [0, 4, 8], [2, 4, 6] 
    ];

    for (let combinacion of combinacionesGanadoras) {
        const [a, b, c] = combinacion;
        if (celdasJuego[a].value && celdasJuego[a].value === celdasJuego[b].value && celdasJuego[a].value === celdasJuego[c].value) {
            juegoActivo = false;
            divMensaje.innerHTML = `<span>${celdasJuego[a].value} ha ganado!</span>`;
            return;
        }
    }

    // Si todas las celdas están llenas y no hay ganador, es empate
    if (celdasJuego.every(celda => celda.value)) {
        divMensaje.innerHTML = "<span>¡Es un empate!</span>";
        juegoActivo = false;
    } else {
        divMensaje.innerHTML = `<span>Es el turno de ${jugadorTurno}</span>`;
    }
}

// Función para reiniciar el juego
function reiniciarJuego() {
    celdasJuego.forEach(celda => celda.value = "");
    juegoActivo = true;
    divMensaje.innerHTML = "";
    jugadorTurno = "X";  
}

// Función que valida que solo se pueda ingresar "X" o "O"
function validarEntrada(event, index) {
    const valor = event.target.value.toUpperCase();
    if (valor !== "X" && valor !== "O") {
        event.target.value = "";  
    }
}
