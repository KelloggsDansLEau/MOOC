<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>

    <main>
    <form action="page2.php" method="post" id="form">
    
    <input type="hidden" name="page" value="1">
    <h1 id="titlepage">QCM entrainement : Initiation</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
                <p>Qu’est ce que Python ?</p>
                <select id="fp1_q1" name="fp1_q1">
                        <option value=""></option>
                        <option value="gâteau">un gâteau</option>
                        <option value="langage">un langage de programmation</option>
                        <option value="fete">une fête américaine</option>
                        <option value="animal">un animal</option>
                    </select>
        </div>
    </div>
    
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>Qu’est-ce qu’un langage de programmation?</p>
            <select id="fp1_q2" name="fp1_q2">
                <option value=""></option>
                <option value="ordinateur">Un langage permettant à un être humain d’écrire un algorithme exécutable sur un ordinateur</option>
                <option value="html">HTML est un langage de programmation</option>
                <option value="binaire">une traduction binaire d’un algorithme</option>
            </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>Qu'est-ce qu’un algorithme ?</p>
            <select id="fp1_q3" name="fp1_q3">
                <option value=""></option>
                <option value="bonbon">une marque de bonbon</option>
                <option value="formule">Une formule mathématique secrète utilisée par les ordinateurs</option>
                <option value="algorithme">La description d'une suite d'étapes permettant d'obtenir un résultat à partir d'éléments fournis en entrée</option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 4</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>qu’est-ce qu’un ordinateur ?</p>
            <select id="fp1_q4" name="fp1_q4">
                <option value=""></option>
                <option value="frittes">une machine qui permet de faire des frites
                </option>
                <option value="programme">un langage de programmation
                </option>
                <option value="fleur">une fleur</option>
                <option value="machine">une machine automatique de traitement de l'information
                </option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 5</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>Qu’est ce qu’une fonction en Python ?
            </p>
            <select id="fp1_q5" name="fp1_q5">
                <option value=""></option>
                <option value="suite">Une suite d'instructions qui définissent programme
                </option>
                <option value="machine">une machine automatique de traitement de l'information
                </option>
                <option value="role">Rôle exercé par quelqu'un au sein d'un groupe, d'une activité
                </option>
                <option value="valeur">un ensemble de valeurs permettant la création d’une variable
                </option>
                </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 6</h3>
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>Qu’est ce qu’un paramètre en Python ?</p>
            <select id="fp1_q6" name="fp1_q6">
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
            <p>Noté sur 1</p>
        </div>
        <div class="content">
            <p>Quel est l’objectif d’une variable ?</p>
            <select id="fp1_q7" name="fp1_q7">
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
</body>
</html>