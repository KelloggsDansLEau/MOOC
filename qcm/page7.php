<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="result.php" method="post" id="form">
        <input type="hidden" name="page" value="6">

        <input type="hidden" name="p1_q1_1" value="<?php echo $_POST['p1_q1_1']?>">
        <input type="hidden" name="p1_q1_2" value="<?php echo $_POST['p1_q1_2']?>">
        <input type="hidden" name="p1_q1_3" value="<?php echo $_POST['p1_q1_3']?>">
        <input type="hidden" name="p1_q1_4" value="<?php echo $_POST['p1_q1_4']?>">
        <input type="hidden" name="p1_q2" value="<?php echo $_POST['p1_q2']?>">
        <input type="hidden" name="p1_q3" value="<?php echo $_POST['p1_q3']?>">

        <input type="hidden" name="p2_q1_1" value="<?php echo $_POST['p2_q1_1']?>">
        <input type="hidden" name="p2_q1_2" value="<?php echo $_POST['p2_q1_2']?>">
        <input type="hidden" name="p2_q2_1" value="<?php echo $_POST['p2_q2_1']?>">
        <input type="hidden" name="p2_q2_2" value="<?php echo $_POST['p2_q2_2']?>">
        <input type="hidden" name="p2_q3_1" value="<?php echo $_POST['p2_q3_1']?>">
        <input type="hidden" name="p2_q3_2" value="<?php echo $_POST['p2_q3_2']?>">

        <input type="hidden" name="p3_q1_1" value="<?php echo $_POST['p3_q1_1']?>">
        <input type="hidden" name="p3_q1_2" value="<?php echo $_POST['p3_q1_2']?>">
        <input type="hidden" name="p3_q1_3" value="<?php echo $_POST['p3_q1_3']?>">
        <input type="hidden" name="p3_q1_4" value="<?php echo $_POST['p3_q1_4']?>">
        <input type="hidden" name="p3_q1_5" value="<?php echo $_POST['p3_q1_5']?>">
        <input type="hidden" name="p3_q2" value="<?php echo $_POST['p3_q2']?>">

        <input type="hidden" name="p4_q1" value="<?php echo $_POST['p4_q1']?>">
        <input type="hidden" name="p4_q2" value="<?php echo $_POST['p4_q2']?>">

        <input type="hidden" name="p5_q1_1" value="<?php echo $_POST['p5_q1_1']?>">
        <input type="hidden" name="p5_q1_2" value="<?php echo $_POST['p5_q1_2']?>">
        <input type="hidden" name="p5_q1_3" value="<?php echo $_POST['p5_q1_3']?>">

        <input type="hidden" name="p6_q1" value="<?php echo $_POST['p6_q1']?>">
        <input type="hidden" name="p6_q2" value="<?php echo $_POST['p6_q2']?>">
        <input type="hidden" name="p6_q3" value="<?php echo $_POST['p6_q3']?>">

    <h1 id="titlepage">QCM Noté : Fonction range()</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 0,25</p>
        </div>
        <div class="content">
            <p>Ecrivez l'appel ( le plus simple possible: range(a,b) ) de la fonction range permettant de générer la séquence de nombres suivante:
                <span style="color: #FF00BF;">2, 3, 4, 5</span>
            </p>
            <label for="p7_q1">Réponse: </label>
            <input type="text" class="form-text" name="p7_q1">
        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 0,25</p>
        </div>
        <div class="content">
            <p>Donnez la séquence de valeurs générées par l'expression 
                <span style="color: #FF00BF;">range(3)</span>
            </p>
            <p><span style="font-style: italic;">Vous écrirez votre résultat sous la forme de nombres séparés par des virgules. Par exemple 1,2,3,4,5 (sans espaces, ni crochets, ni guillemets)</span></p>
            <label for="p7_q2">Réponse: </label>
            <input type="text" class="form-text" name="p7_q2">
        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p>Noté sur 0,25</p>
        </div>
        <div class="content">
            <p>Ecrivez l'appel ( le plus simple possible: range(a) ) de la fonction range permettant de générer la séquence de nombres suivante:
                <span style="color: #FF00BF;">0, 1 2, 3, 4, 5</span>
            </p>
            <label for="p7_q3">Réponse: </label>
            <input type="text" class="form-text" name="p7_q3">
        </div>
    </div>
    
    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>