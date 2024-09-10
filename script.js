const puzzleContainer = document.getElementById('puzzle-container');
const timerElement = document.getElementById('timer');
const resultElement = document.getElementById('result');
let pieces = [
    '1', '2', '3',
    '4', '5', '6',
    '7', '8', ''
];
let startTime, timerInterval;

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}

function createPuzzle() {
    puzzleContainer.innerHTML = '';
    pieces.forEach((piece, index) => {
        const pieceElement = document.createElement('div');
        pieceElement.classList.add('puzzle-piece');
        if (piece === '') {
            pieceElement.classList.add('empty');
        } else {
            pieceElement.textContent = piece;
        }
        pieceElement.addEventListener('click', () => movePiece(index));
        puzzleContainer.appendChild(pieceElement);
    });
}

function movePiece(index) {
    const emptyIndex = pieces.indexOf('');
    if ([index - 1, index + 1, index - 3, index + 3].includes(emptyIndex)) {
        [pieces[index], pieces[emptyIndex]] = [pieces[emptyIndex], pieces[index]];
        createPuzzle();
        if (isSolved()) {
            clearInterval(timerInterval);
            resultElement.textContent = `Solved in ${Math.floor((Date.now() - startTime) / 1000)} seconds!`;
        }
    }
}

function isSolved() {
    return pieces.join('') === '12345678';
}

function startTimer() {
    startTime = Date.now();
    timerInterval = setInterval(() => {
        const elapsed = Math.floor((Date.now() - startTime) / 1000);
        timerElement.textContent = `Time: ${elapsed}s`;
    }, 1000);
}

shuffle(pieces);
createPuzzle();
startTimer();
