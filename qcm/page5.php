<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page6.php" method="post" id="form">
        <input type="hidden" name="page" value="6">
    <h1 id="titlepage">QCM Noté : les Assertions</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit la fonction minimum définie ci-après, complétez la fonction de test :</p>
<pre><code>
def minimum(val1, val2):
    res = 0    
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
</body>
</html>