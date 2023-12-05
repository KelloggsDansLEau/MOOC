<?php

$score = $_POST['score'];
$nom = $_POST['nom'];

function addScore($username, $score) {
    $scoreData = json_decode(file_get_contents('scores.json'), true);

    // Ajout du nouveau score
    $scoreData[] = array('username' => $username, 'score' => $score);

    // Tri par score décroissant
    usort($scoreData, function ($a, $b) {
        return $b['score'] - $a['score'];
    });

    // Limiter à, par exemple, 10 scores
    $scoreData = array_slice($scoreData, 0, 999);

    // Sauvegarde dans le fichier
    file_put_contents('scores.json', json_encode($scoreData));
}

addScore($nom, $score);

header("Location: ./leaderboard.php");

?>