const ticTacToe = document.querySelector('#tic-tac-toe');
const buttons = ticTacToe.querySelectorAll('button');
let currentPlayer = 'X';
let gameOver = false;

function handleClick(event) {
  // Check if the game is over or if the button is already marked
  if (gameOver || event.target.innerHTML) {
    return;
  }

  // Mark the button with the current player's symbol
  event.target.innerHTML = currentPlayer;

  // Switch to the other player
  currentPlayer = currentPlayer === 'X' ? 'O' : 'X';

  // Check if the game is over
  checkGameOver();
}

function checkGameOver() {
  // Check for a winner or a draw
  // If the game is over, set the gameOver flag to true
  // and display a message
}

buttons.forEach(button => button.addEvent)
