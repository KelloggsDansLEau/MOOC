<?php
// Fonction pour afficher le leaderboard depuis le fichier
function displayLeaderboard() {
    $scoreData = json_decode(file_get_contents('scores.json'), true);

    echo "<h2>Leaderboard</h2>";
    echo "<ol>";

    foreach ($scoreData as $score) {
        echo "<li>{$score['username']} - Score: {$score['score']}</li>";
    }

    echo "</ol>";
}

#displayLeaderboard();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="leaderboard.css">
    
</head>
<body>
<?php include('structure.php'); ?>
<div class="leaderboard">
    <table>
        <thead>
        <tr>
            <th>Place</th>
            <th>Nom</th>
            <th>Note</th>
        </tr>
        </thead>
        <tbody>
        <!-- Exemple de données -->
        <?php 
            $scoreData = json_decode(file_get_contents('scores.json'), true);

    
            $place = 1;
            foreach ($scoreData as $score) {
            ?>
                <tr>
                    <td><?php echo $place?></td>
                    <td><?php echo $score['username']?></td>
                    <td><?php echo $score['score']?></td>
                </tr>
                
            <?php
            $place = $place + 1;
            }
            ?>
        
        <!-- Ajoutez d'autres lignes au besoin -->
        </tbody>
    </table>
</div>

</body>
</html>