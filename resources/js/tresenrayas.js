require("./bootstrap.js");

var array= JSON.parse(localStorage.getItem("mujeres"));
console.log(array);
  let arrayPreguntas = new Array();
  for (i=0; i<array.length; i++){
    $.ajax({
      url: '/api/preguntas/'+array[i].id,
      success: function(respuesta) {
        console.log(respuesta);
        arrayPreguntas.push(respuesta);
      },
      error: function() {
            console.log("No se ha podido obtener la información");
        }
    });
  }

alert (arrayPreguntas);

var player = "X"; 
var ai = "O";
var winner, gameboard, playing;

var player = "X";
var ai = "O";
var winner, gameboard, playing;

var mensaje = document.querySelector("#contenedor-mensaje");
var TituloMensaje = document.getElementById("titulo-mensaje");
var btnMensaje = document.getElementsByClassName("btnCerrarMensaje");

// Muestro el mensaje primero 
if (mensaje.classList.contains("ocultar-mensaje")) {
  mensaje.classList.remove("ocultar-mensaje");
  TituloMensaje.innerHTML = "Tu simbolo es X, puedes cambiar si quieres.";
}
// al pulssar el boton para cerrar el mensaje
btnMensaje[0].onclick = function () {
  mensaje.classList.add("ocultar-mensaje");
  reset();
}
btnMensaje[1].onclick = function () {
  mensaje.classList.add("ocultar-mensaje");
}
btnMensaje[2].onclick = function () {
  mensaje.classList.add("ocultar-mensaje");
}

window.$("#SalirJuego").click(function(){
  window.history.back();
});


// cuando el simbolo elegido es X
window.$("#symbol-X").click(function () {
  player = "X";
  ai = "O";
  window.$("#symbol-O").removeClass("glow");
  console.log("El jugador es: " + player);
  reset();
});

// cuando el simbolo elegido es O
window.$("#symbol-O").click(function () {
  player = "O";
  ai = "X";
  window.$("#symbol-X").removeClass("glow");
  console.log("El jugador es: " + player);
  reset();
});

// Funcion para resetear el juego
function reset() {
  setTimeout(function () {
    start();
    window.$('.square').removeClass("glow");
    console.log("game reset");
    window.$('.square').html("");
  }, 1500);
};

// los valores iniciales del juego
function start() {
  window.$('#symbol-' + player).addClass('glow');
  gameboard = ["", "", "", "", "", "", "", "", ""];
  playing = true;
  winner = "none";
}

function getEmptySpaces(board) {
  return board.reduce(function (results, square, index) {
    if (square !== "") {
      return results;
    } else {
      return results.concat(index);
    }
  }, []);
}

function aiTurn() {
  console.log("computer's turn");
  var available = getEmptySpaces(gameboard);
  console.log(available);
  //temporary stop if tie game
  if (available.length === 0) {
    //Aqui se empata 
    mensaje = document.querySelector("#contenedor-mensaje");
    if (mensaje.classList.contains("ocultar-mensaje")) {
      mensaje.classList.remove("ocultar-mensaje");
      TituloMensaje.innerHTML = "Es un empate.";
    }
    return console.log("Es un empate");
  }

  var aiIndex = available[Math.floor(Math.random() * available.length)];
  console.log(aiIndex);
  gameboard[aiIndex] = ai;
  window.$("#sq" + aiIndex).html(ai);
};


function checkForWinner(board) {
  // Check for win conditions 
  var winCon = [
    // Horizontal
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    // Vertical
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    // Diagonal
    [0, 4, 8],
    [2, 4, 6],
  ];
  for (var i = 0; i < winCon.length; i++) {
    var cond = winCon[i];
    // If all three are equal and not blank
    if (board[cond[0]] !== "" && board[cond[0]] === board[cond[1]] && board[cond[1]] === board[cond[2]]) {
      winner = board[cond[0]];
      playing = false;
      window.$('#sq' + cond[0]).addClass('glow');
      window.$('#sq' + cond[1]).addClass('glow');
      window.$('#sq' + cond[2]).addClass('glow');

      // gana el jugador
      if (winner == player) {
        mensaje = document.querySelector("#contenedor-mensaje-victoria");
        if (mensaje.classList.contains("ocultar-mensaje")) {
          mensaje.classList.remove("ocultar-mensaje");
        }
        console.log("¡¡HAS GANADO!!");
      }

      // gana el BOT
      else {
        mensaje = document.querySelector("#contenedor-mensaje-derrota");
        if (mensaje.classList.contains("ocultar-mensaje")) {
          mensaje.classList.remove("ocultar-mensaje");
        }
        console.log("Has Perdido :(");
      }

      console.log(winner + " Wins!");
      reset();
      break;
    }
  }
  if (getEmptySpaces(gameboard).length === 0 && winner === "none") {
    console.log("Game tie!");
    reset();
  }
};


window.$("#gameboard").click(function (e) {
  //end game when winner delcared 
  if (!playing) return;
  console.log("players's turn");

  // el turno del jugador
  alert("es tu turno");

  var playerPick = (e.target.id).slice(2);
  console.log(playerPick);
  var playerSelector = "#sq" + playerPick;

  
  

  var respuesta = false;
  // hay que hacer la pregunta aqui y si responde bien hace el return
  if (gameboard[playerPick] != "") {
    //Aqui el usuario pierde el turno si ha pulsado en la casilla de AI
     return;
  };
  if (gameboard[playerPick] == "" && respuesta) {
    gameboard[playerPick] = player;
    console.log(gameboard);
    $(playerSelector).html(player);
  };

  checkForWinner(gameboard);
  if (playing) {
    aiTurn();
    checkForWinner(gameboard);
  }
});

start();