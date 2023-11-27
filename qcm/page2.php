<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page3.php" method="post" id="form">
        <input type="hidden" name="page" value="1">
    <h1 id="titlepage">QCM Noté : les Opérateurs (or, and, *, +, /)</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 2</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>4 / 2 + 12 / 3</code>
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
                        <label for="p2_q1_2">Quel est la valeur de cette expression ? </label>
                        <input type="text" class="form-text" name="p2_q1_2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 2</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>1 + 2 - 3 * 5</code>
                <ul>
                    <li>
                    <label for="p2_q2">Quel est le type de cette expression ? </label>
                        <select id="p2_q2" name="p2_q2">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        
                    </li>
                    <li>
                        <label for="p2_q2">Quel est la valeur de cette expression ? </label>
                        <input type="text" class="form-text" name="p2_q2">
                    </li>
                </ul>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p>Noté sur 2</p>
        </div>
        <div class="content">
            <p>Soit l'expression ci-dessous :</p>
            <code>39 / 3 - 4</code>
                <ul>
                    <li>
                    <label for="p2_q3">Quel est le type de cette expression ? </label>
                        <select id="p2_q3" name="p2_q3">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        
                    </li>
                    <li>
                        <label for="p2_q3">Quel est la valeur de cette expression ? </label>
                        <input type="text" class="form-text" name="p2_q3">
                    </li>
                </ul>
        </div>
    </div>
    
    <div class="question">
        <div class="info">
            <h3>Question 4</h3>
            <p>Noté sur 2</p>
        </div>
        <div class="content">
            <p>Les expressions sont évaluées suivant les priorités des opérateurs et des parenthèses.</p>
            <p>Ordonnez les classes d'opérateurs dans l'ordre de priorité :
                <ol>
                    <li>or</li>
                    <li>
                        <select id="p2_q4_1" name="p2_q4_1">
                            <option value=""></option>
                            <option value="plus">+, -</option>
                            <option value="fois">*, /, %</option>
                            <option value="and">and</option>
                            <option value="not">not</option>
                        </select>
                    </li>
                    <li>
                        <select id="p2_q4_2" name="p2_q4_2">
                            <option value=""></option>
                            <option value="plus">+, -</option>
                            <option value="fois">*, /, %</option>
                            <option value="and">and</option>
                            <option value="not">not</option>
                        </select>
                    </li>
                    <li>
                        <select id="p2_q4_3" name="p2_q4_3">
                            <option value=""></option>
                            <option value="plus">+, -</option>
                            <option value="fois">*, /, %</option>
                            <option value="and">and</option>
                            <option value="not">not</option>
                        </select>
                    </li>
                    <li>
                        <select id="p2_q4_4" name="p2_q4_4">
                            <option value=""></option>
                            <option value="plus">+, -</option>
                            <option value="fois">*, /, %</option>
                            <option value="and">and</option>
                            <option value="not">not</option>
                        </select>
                    </li>
                </ol>
        </div>
    </div>

    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>