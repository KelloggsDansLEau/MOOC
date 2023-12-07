<!DOCTYPE html>
<html lang="fr">

<body>
    <?php
    include('structure.php');
    include('easy_answers.php');

    $q1 = $_POST['easy_q1'];
    $q2 = $_POST['easy_q2'];
    $q3 = $_POST['easy_q3'];
    $q4 = $_POST['easy_q4'];
    $q5 = $_POST['easy_q5'];
    $q6 = $_POST['easy_q6'];

    $score = 0;
    $score += $q1 == $easy_q1 ? 1 : 0;
    $score += $q2 == $easy_q2 ? 1 : 0;
    $score += $q3 == $easy_q3 ? 1 : 0;
    $score += $q4 == $easy_q4 ? 1 : 0;
    $score += $q5 == $easy_q5 ? 1 : 0;
    $score += $q6 == $easy_q6 ? 1 : 0;

    $score = round($score/6*10, 2);
    ?>

    <div class="congrats">
        <h2>Votre note finale est de <?php echo $score?>/10 !</h2>
        
        <?php if ($score < 5){?>
            <p style="color: red;">Vous n'avez pas obtenu la moyenne. Perdez espoir, ce n'est pas fait pour vous !</p>
        <?php } else {?>
            <h3 style="color: green;">Toutes mes félicitations ! Vous avez de l'avenir dans le domaine !</h3>
        <?php }?>
        <form action="easy_qcm_result.php" method="post">
            <button id="showAnswers" class="button-65">Voir la correction</button></a>
        </form>
        <form action="../index.html" method="post">
            <button class="button-65">Retour à l'accueil</button>
        </form>
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