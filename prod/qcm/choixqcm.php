<!DOCTYPE html>
<html lang="fr">

<body>
    <?php
    include('structure.php');
    ?>

    <div class="congrats">

        <form action="qcm_easy.php" method="post">
            <button id="showAnswers" class="button-65">Lancer le QCM Débutant</button></a>
        </form>
        <form action="page1.php" method="post">
            <button class="button-65">Lancer le QCM Avancé</button>
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