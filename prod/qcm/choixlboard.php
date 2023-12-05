<!DOCTYPE html>
<html lang="fr">

<body>
    <?php include('structure.php'); 
    $score = round($_POST['score']/17*20, 2);
    ?>

    <div class="congrats">
        <h2>Souhaitez vous inscrire votre score de <?php echo $score?>/20 au Classement ?</h2>
        <form action="reqlboard.php" method="post">
            <input type="hidden" name="score" value="<?php echo $score?>">

            <label for="nom">Nom: </label>
            <input type="text" class="form-text" name="nom" required>
            <button class="button-65">M'inscrire</button>
        </form>
        <a href="../index.html"><button class="button-65">Non, Retour à l'accueil</button></a>
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