<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>

    <main>
    <form action="easy_result.php" method="post" id="form">
    
    <h1 id="titlepage">QCM Entrainement : Initiation</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
        </div>
        <div class="content">
                <p>Qu’est ce que Python ?</p>
                <select id="easy_q1" name="easy_q1">
                        <option value=""></option>
                        <option value="gâteau">Un gâteau</option>
                        <option value="langage">Un langage de programmation</option>
                        <option value="fete">Une fête américaine</option>
                        <option value="animal">Un animal</option>
                    </select>
        </div>
    </div>
    
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
        </div>
        <div class="content">
            <p>Qu’est-ce qu’un langage de programmation?</p>
            <select id="easy_q2" name="easy_q2">
                <option value=""></option>
                <option value="ordinateur">Un langage permettant à un être humain d’écrire un algorithme exécutable sur un ordinateur</option>
                <option value="html">HTML est un langage de programmation</option>
                <option value="binaire">Une traduction binaire d’un algorithme</option>
            </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
        </div>
        <div class="content">
            <p>Qu'est-ce qu’un algorithme ?</p>
            <select id="easy_q3" name="easy_q3">
                <option value=""></option>
                <option value="bonbon">Une marque de bonbon</option>
                <option value="formule">Une formule mathématique secrète utilisée par les ordinateurs</option>
                <option value="algorithme">La description d'une suite d'étapes permettant d'obtenir un résultat à partir d'éléments fournis</option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 4</h3>
        </div>
        <div class="content">
            <p>Qu’est-ce qu’un ordinateur ?</p>
            <select id="easy_q4" name="easy_q4">
                <option value=""></option>
                <option value="frittes">Une machine qui permet de faire des frites
                </option>
                <option value="programme">Un langage de programmation
                </option>
                <option value="fleur">Une fleur</option>
                <option value="machine">Une machine automatique de traitement de l'information
                </option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 5</h3>
        </div>
        <div class="content">
            <p>Qu’est ce qu’une fonction en Python ?
            </p>
            <select id="easy_q5" name="easy_q5">
                <option value=""></option>
                <option value="suite">Une suite d'instructions qui définissent programme
                </option>
                <option value="machine">Une machine automatique de traitement de l'information
                </option>
                <option value="role">Rôle exercé par quelqu'un au sein d'un groupe, d'une activité
                </option>
                <option value="valeur">Un ensemble de valeurs permettant la création d’une variable
                </option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 6</h3>
        </div>
        <div class="content">
            <p>Qu’est ce qu’un paramètre en Python ?</p>
            <select id="easy_q6" name="easy_q6">
                <option value=""></option>
                <option value="valeur">Une valeur que l’on choisit pour faire fonctionner un programme
                </option>
                <option value="symbole">Des symboles permettant de communiquer avec la machine
                </option>
                <option value="predefinie">Une valeur pré choisie pour faire fonctionner un programme</option>
                <option value="regler">Permet de régler ton ordinateur</option>
                </select>
        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 7</h3>
        </div>
        <div class="content">
            <p>Quel est l’objectif d’une variable ?</p>
            <select id="easy_q7" name="easy_q7">
                <option value=""></option>
                <option value="stoker">Stocker des informations</option>
                <option value="cryptographie">Assurer la cryptographie automatique des données stockées
                </option>
                <option value="conducteur">Adapter le comportement du programme en fonction de l’humeur du conducteur
                </option>
                </select>
        </div>
    </div>

    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
    <footer>

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