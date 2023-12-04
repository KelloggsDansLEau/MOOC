<!DOCTYPE html>
<html lang="fr">

<body>
    <?php include('structure.php'); ?>
    <?php include('answers.php'); ?>
    
    <?php

    $score = 0;

    $tempscore = $_POST['p1_q1_1'] == $p1_q1_1 ? 1 : 0;
    $tempscore += $_POST['p1_q1_2'] == $p1_q1_2 ? 1 : 0;
    $tempscore += $_POST['p1_q1_3'] == $p1_q1_3 ? 1 : 0;
    $tempscore += $_POST['p1_q1_4'] == $p1_q1_4 ? 1 : 0;
    $score += $tempscore / 4;

    $score += $_POST['p1_q2'] == $p1_q2 ? 1 : 0;
    $score += $_POST['p1_q3'] == $p1_q3 ? 1 : 0;

    $tempscore = $_POST['p2_q1_1'] == $p2_q1_1 ? 1 : 0;
    $tempscore += $_POST['p2_q1_2'] == $p2_q1_2 ? 1 : 0;
    $score += $tempscore / 2;
    
    $tempscore = $_POST['p2_q2_1'] == $p2_q2_1 ? 1 : 0;
    $tempscore += $_POST['p2_q2_2'] == $p2_q2_2 ? 1 : 0;
    $score += $tempscore / 2;

    $tempscore = $_POST['p2_q3_1'] == $p2_q3_1 ? 1 : 0;
    $tempscore += $_POST['p2_q3_2'] == $p2_q3_2 ? 1 : 0;
    $score += $tempscore / 2;

    $tempscore = $_POST['p3_q1_1'] == $p3_q1_1 ? 1 : 0;
    $tempscore += $_POST['p3_q1_2'] == $p3_q1_2 ? 1 : 0;
    $tempscore += $_POST['p3_q1_3'] == $p3_q1_3 ? 1 : 0;
    $tempscore += $_POST['p3_q1_4'] == $p3_q1_4 ? 1 : 0;
    $tempscore += $_POST['p3_q1_5'] == $p3_q1_5 ? 1 : 0;
    $score += $tempscore / 5;

    $score += $_POST['p3_q2'] == $p3_q2 ? 1 : 0;

    $score += $_POST['p4_q1'] == $p4_q1 ? 1 : 0;
    $score += $_POST['p4_q2'] == $p4_q2 ? 1 : 0;
    
    $tempscore = $_POST['p5_q1_1'] == $p5_q1_1 ? 1 : 0;
    $tempscore += $_POST['p5_q1_2'] == $p5_q1_2 ? 1 : 0;
    $tempscore += $_POST['p5_q1_3'] == $p5_q1_3 ? 1 : 0;
    $score += $tempscore / 3;

    $score += $_POST['p6_q1'] == $p6_q1 ? 1 : 0;
    $score += $_POST['p6_q2'] == $p6_q2 ? 1 : 0;
    $score += $_POST['p6_q3'] == $p6_q3 ? 1 : 0;

    $score += $_POST['p7_q1'] == $p7_q1 ? 1 : 0;
    $score += $_POST['p7_q2'] == $p7_q2 ? 1 : 0;
    $score += $_POST['p7_q3'] == $p7_q3 ? 1 : 0;
    ?>

    <div class="congrats">
        <h2>Votre note finale pour ce test est <?php echo round($score/17*20, 2)?>/20 !</h2>
        
        <?php if ($score/17*20 < 10){?>
            <p style="color: red;">Vous n'avez pas obtenu la moyenne. Ne perdez pas espoir, vous pouvez toujours vous améliorer !</p>
        <?php } else {?>
            <h3 style="color: green;">Toutes mes félicitations !</h3>
        <?php }?>
        <button id="showAnswers" class="button-65">Afficher la correction</button>
        <form action="choixlboard.php" method="post">
            <input type="hidden" name="score" value="<?php echo $score?>">
            <button class="button-65">Retour à l'accueil</button>
        </form>
        <!--a href="index.html"><button class="button-65">Retour à l'accueil</button></a-->
    </div>

    <?php

    $req = array(
        'p1_q1_1' => $p1_q1_1,
        'p1_q1_2' => $p1_q1_2,
        'p1_q1_3' => $p1_q1_3,
        'p1_q1_4' => $p1_q1_4,
        'p1_q2' => $p1_q2,
        'p1_q3' => $p1_q3,
        'p2_q1_1' => $p2_q1_1,
        'p2_q1_2' => $p2_q1_2,
        'p2_q2_1' => $p2_q2_1,
        'p2_q2_2' => $p2_q2_2,
        'p2_q3_1' => $p2_q3_1,
        'p2_q3_2' => $p2_q3_2,
        'p3_q1_1' => $p3_q1_1,
        'p3_q1_2' => $p3_q1_2,
        'p3_q1_3' => $p3_q1_3,
        'p3_q1_4' => $p3_q1_4,
        'p3_q1_5' => $p3_q1_5,
        'p3_q2' => $p3_q2,
        'p4_q1' => $p4_q1,
        'p4_q2' => $p4_q2,
        'p5_q1_1' => $p5_q1_1,
        'p5_q1_2' => $p5_q1_2,
        'p5_q1_3' => $p5_q1_3,
        'p6_q1' => $p6_q1,
        'p6_q2' => $p6_q2,
        'p6_q3' => $p6_q3,
        'p7_q1' => $p7_q1,
        'p7_q2' => $p7_q2,
        'p7_q3' => $p7_q3
    );

    $post = array(
        'p1_q1_1' => $_POST['p1_q1_1'],
        'p1_q1_2' => $_POST['p1_q1_2'],
        'p1_q1_3' => $_POST['p1_q1_3'],
        'p1_q1_4' => $_POST['p1_q1_4'],
        'p1_q2' => $_POST['p1_q2'],
        'p1_q3' => $_POST['p1_q3'],
        'p2_q1_1' => $_POST['p2_q1_1'],
        'p2_q1_2' => $_POST['p2_q1_2'],
        'p2_q2_1' => $_POST['p2_q2_1'],
        'p2_q2_2' => $_POST['p2_q2_2'],
        'p2_q3_1' => $_POST['p2_q3_1'],
        'p2_q3_2' => $_POST['p2_q3_2'],
        'p3_q1_1' => $_POST['p3_q1_1'],
        'p3_q1_2' => $_POST['p3_q1_2'],
        'p3_q1_3' => $_POST['p3_q1_3'],
        'p3_q1_4' => $_POST['p3_q1_4'],
        'p3_q1_5' => $_POST['p3_q1_5'],
        'p3_q2' => $_POST['p3_q2'],
        'p4_q1' => $_POST['p4_q1'],
        'p4_q2' => $_POST['p4_q2'],
        'p5_q1_1' => $_POST['p5_q1_1'],
        'p5_q1_2' => $_POST['p5_q1_2'],
        'p5_q1_3' => $_POST['p5_q1_3'],
        'p6_q1' => $_POST['p6_q1'],
        'p6_q2' => $_POST['p6_q2'],
        'p6_q3' => $_POST['p6_q3'],
        'p7_q1' => $_POST['p7_q1'],
        'p7_q2' => $_POST['p7_q2'],
        'p7_q3' => $_POST['p7_q3']
    );

    ?>

    <main>

    <div id="answers" hidden>

    <h1 id="titlepage">QCM Noté : les Types</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p><?php 
            $tempscore = $_POST['p1_q1_1'] == $p1_q1_1 ? 1 : 0;
            $tempscore += $_POST['p1_q1_2'] == $p1_q1_2 ? 1 : 0;
            $tempscore += $_POST['p1_q1_3'] == $p1_q1_3 ? 1 : 0;
            $tempscore += $_POST['p1_q1_4'] == $p1_q1_4 ? 1 : 0;
            echo $tempscore/4?>/1,00</p>
        </div>
        <div class="content">
            <p>Choisissez les noms des types de bases du langage Python :</p>
                <ul>
                    <li>
                        <?php $actual = 'p1_q1_1'; ?>
                        <select disabled id="p1_q1_1" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q1_1">
                            <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                            <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                            <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                            <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                            <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                        </select>
                        <label for="p1_q1_1">: pour représenter les entiers relatifs</label>
                    </li>
                    <li>
                    <?php $actual = 'p1_q1_2'; ?>
                        <select disabled id="p1_q1_2" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q1_2">
                        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                            <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                            <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                            <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                            <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                        </select>
                        <label for="p1_q1_2">: pour représenter les réels</label>
                    </li>
                    <li>
                        <?php $actual = 'p1_q1_3'; ?>
                        <select disabled id="p1_q1_3" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q1_3">
                        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                            <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                            <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                            <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                            <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                        </select>
                        <label for="p1_q1_3">: pour représenter les booléens</label>
                    </li>
                    <li>
                        <?php $actual = 'p1_q1_4'; ?>
                        <select disabled id="p1_q1_4" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q1_4">
                        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                            <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                            <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                            <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                            <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                        </select>
                        <label for="p1_q1_4">: pour représenter les chaînes de caractères</label>
                    </li>
                </ul>
        </div>
    </div>

    <div class="outcome" <?php echo $tempscore/4 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>int: pour représenter les entiers relatifs</li>
                    <li>float: pour représenter les réels</li>
                    <li>bool: pour représenter les booléens</li>
                    <li>str: pour représenter les chaînes de caractères</li>
                </ul>
            </div>

        </div>
    </div>
    
    <div class="question">
        <?php $actual = 'p1_q2'; ?>
        <div class="info">
            <h3>Question 2</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Soit la variable ci-après :</p>
            <code>res = "toto"</code>
            <label for="p1_q2">Quel est le type de la variable res ?</label>
            <select disabled id="p1_q2" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q2">
                <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                </select>
            </select>
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>str</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="question">
        <?php $actual = 'p1_q3'; ?>
        <div class="info">
            <h3>Question 3</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Soit la variable ci-après :</p>
            <code>res = 47.5</code>
            <label for="p1_q3">Quel est le type de la variable res ?</label>
            <select disabled id="p1_q3" <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> name="p1_q3">
                <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
            </select>
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>float</li>
                </ul>
            </div>

        </div>
    </div>


    <h1 id="titlepage">QCM Noté : les Opérateurs (or, and, *, +, /)</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p><?php 
            $tempscore = $_POST['p2_q1_1'] == $p2_q1_1 ? 1 : 0;
            $tempscore += $_POST['p2_q1_2'] == $p2_q1_2 ? 1 : 0;
            echo $tempscore/2?>/1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>4 / 2 + 6 / 2</code>
                <ul>
                    <li>
                    <label for="p2_q1_1">Quel est le type de cette expression ? </label>
                    <?php $actual = 'p2_q1_1'; ?>
                        <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p2_q1_1" name="p2_q1_1">
                            <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                            <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                            <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                            <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                            <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                        </select>
                        
                    </li>
                    <li>
                    <?php $actual = 'p2_q1_2'; ?>
                        <label for="p2_q1_2">Quel est la valeur de cette expression ? </label>
                        <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p2_q1_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="outcome" <?php echo $tempscore/2 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>float</li>
                    <li>5.0</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p><?php 
            $tempscore = $_POST['p2_q2_1'] == $p2_q2_1 ? 1 : 0;
            $tempscore += $_POST['p2_q2_2'] == $p2_q2_2 ? 1 : 0;
            echo $tempscore/2?>/1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>3 * 5 - 1 + 2</code>
                <ul>
                    <li>
                    <label for="p2_q2_1">Quel est le type de cette expression ? </label>
                    <?php $actual = 'p2_q2_1'; ?>
                    <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p2_q2_1" name="p2_q2_1">
                        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                        <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                        <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                        <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                        <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                    </select>
                        
                    </li>
                    <li>
                        <?php $actual = 'p2_q2_2'; ?>
                        <label for="p2_q2_2">Quel est la valeur de cette expression ? </label>
                        <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p2_q2_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="outcome" <?php echo $tempscore/2 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>int</li>
                    <li>16</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p><?php 
            $tempscore = $_POST['p2_q3_1'] == $p2_q3_1 ? 1 : 0;
            $tempscore += $_POST['p2_q3_2'] == $p2_q3_2 ? 1 : 0;
            echo $tempscore/2?>/1,00</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>True or False</code>
                <ul>
                    <li>
                    <label for="p2_q3_1">Quel est le type de cette expression ? </label>
                    <?php $actual = 'p2_q3_1'; ?>
                    <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p2_q3_1" name="p2_q3_1">
                        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                        <option value="float" <?php echo $post[$actual] == "float" ? 'selected' : ''?>>float</option>
                        <option value="int" <?php echo $post[$actual] == "int" ? 'selected' : ''?>>int</option>
                        <option value="str" <?php echo $post[$actual] == "str" ? 'selected' : ''?>>str</option>
                        <option value="bool" <?php echo $post[$actual] == "bool" ? 'selected' : ''?>>bool</option>
                    </select>
                        
                    </li>
                    <li>
                        <?php $actual = 'p2_q3_2'; ?>
                        <label for="p2_q3_2">Quel est la valeur de cette expression ? </label>
                        <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p2_q3_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="outcome" <?php echo $tempscore/2 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>bool</li>
                    <li>True</li>
                </ul>
            </div>

        </div>
    </div>


    <h1 id="titlepage">QCM Noté : les Algorithmes</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p><?php 
            $tempscore = $_POST['p3_q1_1'] == $p3_q1_1 ? 1 : 0;
            $tempscore += $_POST['p3_q1_2'] == $p3_q1_2 ? 1 : 0;
            $tempscore += $_POST['p3_q1_3'] == $p3_q1_3 ? 1 : 0;
            $tempscore += $_POST['p3_q1_4'] == $p3_q1_4 ? 1 : 0;
            $tempscore += $_POST['p3_q1_5'] == $p3_q1_5 ? 1 : 0;
            echo $tempscore/5?>/1,00</p>
        </div>
        <div class="content">
            <p>On considère l'algorithme compte_voiture_rouges qui compte le nombre de voitures rouges.</p>
            <p>Reconstituez la séquence d'instructions dans le bon ordre.</p>
            <pre>
<code>
<span class="underline">algo</span>: compte_voitures_rouges
    <span class="underline">paramètres</span>: liste_voitures (liste) : la liste des voitures
    <span class="underline">résutat</span>: (entier) : le nombre de voitures rouges
    <span class="underline">début</span> :
    <?php $actual = 'p3_q1_1';?>
    <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q1_1" name="p3_q1_1">
        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
        <option value="1" <?php echo $post[$actual] == "1" ? 'selected' : ''?>>mettre 0 dans le compteur</option>
        <option value="2" <?php echo $post[$actual] == "2" ? 'selected' : ''?>>si la voiture est rouge</option>
        <option value="3" <?php echo $post[$actual] == "3" ? 'selected' : ''?>>pour chaque voiture dans la liste_voitures</option>
        <option value="4" <?php echo $post[$actual] == "4" ? 'selected' : ''?>>ajouter 1 au compteur</option>
        <option value="5" <?php echo $post[$actual] == "5" ? 'selected' : ''?>>retourner le compteur</option>
    </select>
    <?php $actual = 'p3_q1_2';?>
    <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q1_2" name="p3_q1_2">
        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
        <option value="1" <?php echo $post[$actual] == "1" ? 'selected' : ''?>>mettre 0 dans le compteur</option>
        <option value="2" <?php echo $post[$actual] == "2" ? 'selected' : ''?>>si la voiture est rouge</option>
        <option value="3" <?php echo $post[$actual] == "3" ? 'selected' : ''?>>pour chaque voiture dans la liste_voitures</option>
        <option value="4" <?php echo $post[$actual] == "4" ? 'selected' : ''?>>ajouter 1 au compteur</option>
        <option value="5" <?php echo $post[$actual] == "5" ? 'selected' : ''?>>retourner le compteur</option>
    </select>
        <?php $actual = 'p3_q1_3';?>
        <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q1_3" name="p3_q1_3">
            <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
            <option value="1" <?php echo $post[$actual] == "1" ? 'selected' : ''?>>mettre 0 dans le compteur</option>
            <option value="2" <?php echo $post[$actual] == "2" ? 'selected' : ''?>>si la voiture est rouge</option>
            <option value="3" <?php echo $post[$actual] == "3" ? 'selected' : ''?>>pour chaque voiture dans la liste_voitures</option>
            <option value="4" <?php echo $post[$actual] == "4" ? 'selected' : ''?>>ajouter 1 au compteur</option>
            <option value="5" <?php echo $post[$actual] == "5" ? 'selected' : ''?>>retourner le compteur</option>
        </select>
            <?php $actual = 'p3_q1_4';?>
            <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q1_4" name="p3_q1_4">
                <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                <option value="1" <?php echo $post[$actual] == "1" ? 'selected' : ''?>>mettre 0 dans le compteur</option>
                <option value="2" <?php echo $post[$actual] == "2" ? 'selected' : ''?>>si la voiture est rouge</option>
                <option value="3" <?php echo $post[$actual] == "3" ? 'selected' : ''?>>pour chaque voiture dans la liste_voitures</option>
                <option value="4" <?php echo $post[$actual] == "4" ? 'selected' : ''?>>ajouter 1 au compteur</option>
                <option value="5" <?php echo $post[$actual] == "5" ? 'selected' : ''?>>retourner le compteur</option>
            </select>
    <?php $actual = 'p3_q1_5';?>
    <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q1_5" name="p3_q1_5">
        <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
        <option value="1" <?php echo $post[$actual] == "1" ? 'selected' : ''?>>mettre 0 dans le compteur</option>
        <option value="2" <?php echo $post[$actual] == "2" ? 'selected' : ''?>>si la voiture est rouge</option>
        <option value="3" <?php echo $post[$actual] == "3" ? 'selected' : ''?>>pour chaque voiture dans la liste_voitures</option>
        <option value="4" <?php echo $post[$actual] == "4" ? 'selected' : ''?>>ajouter 1 au compteur</option>
        <option value="5" <?php echo $post[$actual] == "5" ? 'selected' : ''?>>retourner le compteur</option>
    </select>
</code>
            </pre>
            
        </div>

    </div>

    <div class="outcome" <?php echo $tempscore/5 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:</div>
            <pre><code>
<span class="underline">algo</span>: compte_voitures_rouges
    <span class="underline">paramètres</span>: liste_voitures (liste) : la liste des voitures
    <span class="underline">résutat</span>: (entier) : le nombre de voitures rouges
    <span class="underline">début</span> :
    <select disabled id="" name="">
        <option value="" selected>mettre 0 dans le compteur</option>
        <option value="x">pour chaque voiture dans la liste_voitures</option>
    </select>
    <select disabled id="" name="">
        <option value="" selected>pour chaque voiture dans la liste_voitures</option>
        <option value="x">pour chaque voiture dans la liste_voitures</option>
    </select>
        <select disabled id="" name="">
            <option value="" selected>si la voiture est rouge</option>
            <option value="x">pour chaque voiture dans la liste_voitures</option>
        </select>
            <select disabled id="" name="">
                <option value="" selected>ajouter 1 au compteur</option>
                <option value="x">pour chaque voiture dans la liste_voitures</option>
            </select>
    <select disabled id="" name="">
        <option value="" selected>retourner le compteur</option>
        <option value="x">pour chaque voiture dans la liste_voitures</option>
    </select>
</code></pre>
        </div>
    </div>


    <div class="question">
        <div class="info">
            <?php $actual = 'p3_q2';?>
            <h3>Question 2</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>On considère l'algorithme mystere suivant:</p>
            <pre><code>
<span class="underline">algo</span>: mystere
    <span class="underline">paramètre</span>: le_mot (chaine) : un mot
    <span class="underline">début</span>:
        mettre 0 dans le compteur
        pour chaque lettre dans le_mot
            si la lettre est une voyelle
                ajouter 1 au compteur
            sinon
                enlever 1 au compteur
        si compteur > 0
            mettre Vrai dans res
        sinon
            mettre Faux dans res
        retourner res
            </code></pre>
            
            <label for="p3_q2">Que fait l'algorithme ?</label>
            <select disabled <?php echo $post[$actual] == $req[$actual] ? 'class="check"' : 'class="wrong"'?> id="p3_q2" name="p3_q2">
                <option value="" <?php echo $post[$actual] == "" ? 'selected' : ''?>></option>
                <option value="c1" <?php echo $post[$actual] == "c1" ? 'selected' : ''?>>Lorem ipsum dolor sit amet</option>
                <option value="c2" <?php echo $post[$actual] == "c2" ? 'selected' : ''?>>Lorem ipsum dolor sit amet consectetur adipisicing elit.</option>
                <option value="c3" <?php echo $post[$actual] == "c3" ? 'selected' : ''?>>Indique si il y a plus de voyelles que de consonnes dans un mot</option>
                <option value="c4" <?php echo $post[$actual] == "c4" ? 'selected' : ''?>>Lorem ipsum dolor sit amet consectetur adipisicing.</option>
            </select>
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : ''?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>Indique si il y a plus de voyelles que de consonnes dans un mot</li>
                </ul>
            </div>

        </div>
    </div>


    <h1 id="titlepage">QCM Noté : les Fonctions</h1>
    <div class="question">
        <div class="info">
            <?php $actual = 'p4_q1';?>
            <h3>Question 1</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
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
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p4_q1">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>22</li>
                </ul>
            </div>

        </div>
    </div>


    <div class="question">
        <div class="info">
            <?php $actual = 'p4_q2';?>
            <h3>Question 2</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
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
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p4_q2">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>2</li>
                </ul>
            </div>

        </div>
    </div>



    <h1 id="titlepage">QCM Noté : les Assertions</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p><?php 
            $tempscore = $_POST['p5_q1_1'] == $p5_q1_1 ? 1 : 0;
            $tempscore += $_POST['p5_q1_2'] == $p5_q1_2 ? 1 : 0;
            $tempscore += $_POST['p5_q1_3'] == $p5_q1_3 ? 1 : 0;
            echo $tempscore/3?>/1,00</p>
        </div>
        <div class="content">
            <p>Soit la fonction minimum définie ci-après, complétez la fonction de test :</p>
<pre><code>
def minimum(val1, val2):
    if val1 < val2:
        res = val1
    else:
        res = val2
    return res

def test_minimum():
    assert minimum(15, 12) == <input disabled <?php $actual = 'p5_q1_1'; echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p5_q1_1">
    assert minimum(12, 15) == <input disabled <?php $actual = 'p5_q1_2'; echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p5_q1_2">
    assert minimum(-5, 1) == <input disabled <?php $actual = 'p5_q1_3'; echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p5_q1_3">
</code></pre>
        </div>
    </div>
    <div class="outcome" <?php echo $tempscore/3 < 1 ? '' : 'hidden'?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>12</li>
                    <li>12</li>
                    <li>-5</li>
                </ul>
            </div>

        </div>
    </div>



    <h1 id="titlepage">QCM Noté : Fonction len()</h1>
    <div class="question">
        <div class="info">
            <?php $actual = 'p6_q1';?>
            <h3>Question 1</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Que retourne l'appel à la fonction len ci-après:</p>
            <code>len('toto')</code>
            <label for="p6_q1">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p6_q1">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>4</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="question">
        <div class="info">
            <?php $actual = 'p6_q2';?>
            <h3>Question 2</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Que retourne l'appel à la fonction len ci-après:</p>
            <code>len('toto' * 2)</code>
            <label for="p6_q2">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p6_q2">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>8</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="question">
        <div class="info">
            <?php $actual = 'p6_q3';?>
            <h3>Question 3</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Que retourne l'appel à la fonction len ci-après:</p>
            <code>len(['roucoule', 'toto'])</code>
            <label for="p6_q3">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-short-text check"' : 'class="form-short-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p6_q3">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>2</li>
                </ul>
            </div>

        </div>
    </div>





    <h1 id="titlepage">QCM Noté : Fonction range()</h1>
    <div class="question">
        <div class="info">
            <?php $actual = 'p7_q1';?>
            <h3>Question 1</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Ecrivez l'appel ( le plus simple possible: range(a,b) ) de la fonction range permettant de générer la séquence de nombres suivante:
                <span style="color: #FF00BF;">2, 3, 4, 5</span>
            </p>
            <label for="p7_q1">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-text check"' : 'class="form-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p7_q1">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>range(2,6)</li>
                </ul>
            </div>

        </div>
    </div>


    <div class="question">
        <div class="info">
            <?php $actual = 'p7_q2';?>
            <h3>Question 2</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Donnez la séquence de valeurs générées par l'expression 
                <span style="color: #FF00BF;">range(3)</span>
            </p>
            <p><span style="font-style: italic;">Vous écrirez votre résultat sous la forme de nombres séparés par des virgules. Par exemple 1,2,3,4,5 (sans espaces, ni crochets, ni guillemets)</span></p>
            <label for="p7_q2">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-text check"' : 'class="form-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p7_q2">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>0,1,2</li>
                </ul>
            </div>

        </div>
    </div>


    <div class="question">
        <div class="info">
            <?php $actual = 'p7_q3';?>
            <h3>Question 3</h3>
            <p><?php echo $post[$actual] == $req[$actual] ? 1 : 0;?>/1</p>
        </div>
        <div class="content">
            <p>Ecrivez l'appel ( le plus simple possible: range(a) ) de la fonction range permettant de générer la séquence de nombres suivante:
                <span style="color: #FF00BF;">0, 1 2, 3, 4, 5</span>
            </p>
            <label for="p7_q3">Réponse: </label>
            <input disabled <?php echo $post[$actual] == $req[$actual] ? 'class="form-text check"' : 'class="form-text wrong"'?> value="<?php echo $post[$actual]?>" type="text" name="p7_q3">
        </div>
    </div>
    <div class="outcome" <?php echo $post[$actual] == $req[$actual] ? 'hidden' : '';?>>
        <h4>Feedback</h4>
        <div class="feedback">
            <div class="specificfeedback">Votre réponse est incorrecte.</div>
            <div class="rightanswer">La réponse correcte est:
                <ul>
                    <li>range(6)</li>
                </ul>
            </div>

        </div>
    </div>


    <button id="hideAnswers">Retirer la correction</button>
    </div>
    
    <script>
        document.getElementById("showAnswers").addEventListener(
        "click",
        function () {
            document.getElementById("answers").hidden = !document.getElementById("answers").hidden;
        },
        false,
        );

        document.getElementById("hideAnswers").addEventListener(
        "click",
        function () {
            document.getElementById("answers").hidden = !document.getElementById("answers").hidden;
        },
        false,
        );
</script>
    </main>
</body>
</html>