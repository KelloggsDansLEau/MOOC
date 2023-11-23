<?php
include_once "./answers.php";
?>
<!DOCTYPE html>
<html lang="fr">

<body>
    <?php include('structure.php'); ?>
    <main>
    <?php
    echo '<h1>les Types</h1>';
    echo $_POST['p1_q1_1'] == page1_q1_1 ? "Question 1-1: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q1_2'] == page1_q1_2 ? "Question 1-2: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q1_3'] == page1_q1_3 ? "Question 1-3: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q1_4'] == page1_q1_4 ? "Question 1-4: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q2'] == page1_q2 ? "Question 2: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q3'] == page1_q3 ? "Question 3: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q4_1'] == page1_q4_1 ? "Question 4-1: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q4_2'] == page1_q4_2 ? "Question 4-2: " . "true" : "false";
    echo "<br>";
    echo $_POST['p1_q5'] == page1_q5 ? "Question 5: " . "true" : "false";
    echo "<br>";
    ?>
    <input type="button" value="Page précédente" onclick="history.go(-1)">
    </main>
</body>
</html>