<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>

    <main>
    <form action="page3.php" method="post" id="form">
        <input type="hidden" name="page" value="2">

        <input type="hidden" name="p1_q1_1" value="<?php echo $_POST['p1_q1_1']?>">
        <input type="hidden" name="p1_q1_2" value="<?php echo $_POST['p1_q1_2']?>">
        <input type="hidden" name="p1_q1_3" value="<?php echo $_POST['p1_q1_3']?>">
        <input type="hidden" name="p1_q1_4" value="<?php echo $_POST['p1_q1_4']?>">
        <input type="hidden" name="p1_q2" value="<?php echo $_POST['p1_q2']?>">
        <input type="hidden" name="p1_q3" value="<?php echo $_POST['p1_q3']?>">
    <h1 id="titlepage">QCM Noté : les Opérateurs (or, and, *, +, /)</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression:</p>
            <code>4 / 2 + 6 / 2</code>
                <ul>
                    <li>
                    <label for="p2_q1_1">Quel est le type de cette expression ? </label>
                        <select id="p2_q1_1" name="p2_q1_1">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        
                    </li>
                    <li>
                        <label for="p2_q1_2">Quel est la valeur de cette expression ? (Si il y a une virgule, mettre un point. Exemple: 1.5)</label>
                        <input type="text" class="form-short-text" name="p2_q1_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression:</p>
            <code>3 * 5 - 1 + 2</code>
                <ul>
                    <li>
                    <label for="p2_q2_1">Quel est le type de cette expression ? </label>
                        <select id="p2_q2_1" name="p2_q2_1">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        
                    </li>
                    <li>
                        <label for="p2_q2_2">Quel est la valeur de cette expression ? (Si il y a une virgule, mettre un point. Exemple: 1.5)</label>
                        <input type="text" class="form-short-text" name="p2_q2_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression:</p>
            <code>True or False</code>
                <ul>
                    <li>
                    <label for="p2_q3_1">Quel est le type de cette expression ? </label>
                        <select id="p2_q3_1" name="p2_q3_1">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        
                    </li>
                    <li>
                        <label for="p2_q3_2">Quel est la valeur de cette expression ?</label>
                        <input type="text" class="form-short-text" name="p2_q3_2">
                    </li>
                </ul>
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