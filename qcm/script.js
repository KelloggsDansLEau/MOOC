var timer;
var timeRemaining = 600; // 10 minutes

function startTimer() {
    timer = setInterval(updateTimer, 1000);
}

function updateTimer() {
    var minutes = Math.floor(timeRemaining / 60);
    var seconds = timeRemaining % 60;

    document.getElementById('timer').innerHTML = `${minutes}:${seconds}`;

    if (timeRemaining === 0) {
        clearInterval(timer);
        alert('Temps écoulé !');

    } else {
        timeRemaining--;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    startTimer();
});

/*window.onbeforeunload = function() {
    return "";
}*/