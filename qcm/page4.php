<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page5.php" method="post" id="form">
        <input type="hidden" name="page" value="5">

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

        

    <h1 id="titlepage">QCM Noté : les Fonctions</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Quelle est la valeur de retour de l'appel <strong>ma_fonction(22, 10)</strong>?</p>
<pre><code>
def ma_fonction(val1, val2):
    if val1 > val2:
        res = val1
    else:
        res = val2
    return res
</code></pre>
            <label for="p4_q1">Réponse: </label>
            <input type="text" class="form-short-text" name="p4_q1">
        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Que retourne l'appel à la fonction mystere suivant <strong>mystere('roucoule')</strong>?</p>
<pre><code>
def mystere(mot):
    x = 0
    for caractere in mot:
        if caractere == 'o':
            x = x + 1
    return x
</code></pre>
            <label for="p4_q2">Réponse: </label>
            <input type="text" class="form-short-text" name="p4_q2">
        </div>
    </div>
    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>