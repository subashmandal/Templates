// JavaScript game code

// Get the canvas element
const canvas = document.getElementById('game-canvas');
const ctx = canvas.getContext('2d');

// Set the initial position of the player
let playerX = canvas.width / 2 - 25;
let playerY = canvas.height - 30;

// Set the initial position and velocity of the ball
let ballX = canvas.width / 2;
let ballY = canvas.height / 2;
let ballRadius = 10;
let ballDX = 2;
let ballDY = -2;

// Set the initial score and lives
let score = 0;
let lives = 3;

// Variables for player movement
let rightPressed = false;
let leftPressed = false;

// Handle keydown and keyup events for player movement
document.addEventListener('keydown', keyDownHandler);
document.addEventListener('keyup', keyUpHandler);

function keyDownHandler(event) {
    if (event.key === 'Right' || event.key === 'ArrowRight') {
        rightPressed = true;
    } else if (event.key === 'Left' || event.key === 'ArrowLeft') {
        leftPressed = true;
    }
}

function keyUpHandler(event) {
    if (event.key === 'Right' || event.key === 'ArrowRight') {
        rightPressed = false;
    } else if (event.key === 'Left' || event.key === 'ArrowLeft') {
        leftPressed = false;
    }
}

// Update the game state
function update() {
    if (rightPressed && playerX < canvas.width - 50) {
        playerX += 5;
    } else if (leftPressed && playerX > 0) {
        playerX -= 5;
    }

    // Move the ball
    ballX += ballDX;
    ballY += ballDY;

    // Reverse the ball direction if it hits the walls
    if (ballX + ballRadius > canvas.width || ballX - ballRadius < 0) {
        ballDX = -ballDX;
    }
    if (ballY - ballRadius < 0) {
        ballDY = -ballDY;
    }

    // Check if the ball hits the player
    if (ballY + ballRadius > playerY && ballX > playerX && ballX < playerX + 50) {
        ballDY = -ballDY;
        score++;
    }

    // Check if the ball goes below the player
    if (ballY + ballRadius > canvas.height) {
        ballX = canvas.width / 2;
        ballY = canvas.height / 2;
        lives--;

        if (lives === 0) {
            gameOver();
            return; // Stop the game loop
        }
    }

    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the player
    ctx.beginPath();
    ctx.rect(playerX, playerY, 50, 10);
    ctx.fillStyle = '#fff';
    ctx.fill();
    ctx.closePath();

    // Draw the ball
    ctx.beginPath();
    ctx.arc(ballX, ballY, ballRadius, 0, Math.PI * 2);
    ctx.fillStyle = '#fff';
    ctx.fill();
    ctx.closePath();

    // Draw the score
    ctx.font = '16px Ubuntu';
    ctx.fillStyle = '#fff';
    ctx.fillText('Score: ' + score, 10, 20);

    // Draw the lives
    ctx.fillText('Lives: ' + lives, canvas.width - 70, 20);

    // Continue the game loop
    requestAnimationFrame(update);
}

// Game over
function gameOver() {
    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Display the game over message
    ctx.font = '24px Ubuntu';
    ctx.fillStyle = '#fff';
    ctx.fillText('Game Over', canvas.width / 2 - 80, canvas.height / 2);
    ctx.font = '16px Ubuntu';
    ctx.fillText('Best of luck for the scholarship!', canvas.width / 2 - 130, canvas.height / 2 + 30);
}

// Start the game loop
update();
