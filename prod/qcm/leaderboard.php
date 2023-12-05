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
                    <td><?php echo $score['score']?>/20</td>
                </tr>
                
            <?php
            $place = $place + 1;
            }
            ?>
        
        <!-- Ajoutez d'autres lignes au besoin -->
        </tbody>
    </table>
</div>
<footer>
    <style>
        footer{
            bottom: 0;
            position: fixed;
            width: 100%;
        }
    </style>
    <p>Copyright © 2023 MOOC Algorithme-Python - BUT 1 IUT Informatique d'Orleans</p>

    <p>Created by <span style="color: white;">Alexis</span> N, <span style="color: white;">Axel</span> M, <span style="color: white;">Enzo</span> R, <span style="color: white;">Corentin</span> T, <span style="color: white;">Arthur</span> P.</p>
    <img src="../img/iut.png" alt="logo_iut" id="logo_iut">
    <img src="../img/univ.png" alt="logo_univ" id="logo_univ">

    <p>Sources :
            <a href="https://smallpdf.com/fr/blog/telecharger-gratuitement-des-feuilles-a-petits-carreaux-au-format-pdf">Gif de fond</a>, 
            <a href="https://celene.univ-orleans.fr">QCM Thème Celene</a>
    </p>
    </footer>
</body>
</html>