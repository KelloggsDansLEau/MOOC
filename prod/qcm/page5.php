<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page6.php" method="post" id="form">
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


    <h1 id="titlepage">QCM Noté : 5. les Assertions</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Notée sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit la fonction minimum définie, complétez la fonction de test :</p>
<pre><code>
def minimum(val1, val2):
    if val1 < val2:
        res = val1
    else:
        res = val2
    return res

def test_minimum():
    assert minimum(15, 12) == <input type="text" class="form-short-text" name="p5_q1_1">
    assert minimum(12, 15) == <input type="text" class="form-short-text" name="p5_q1_2">
    assert minimum(-5, 1) == <input type="text" class="form-short-text" name="p5_q1_3">
</code></pre>
        </div>
    </div>

    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
    <footer>

        <!--style>
            footer{
                bottom: 0;
                position: fixed;
                width: 100%;
            }
        </style-->
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