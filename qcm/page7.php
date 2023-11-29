<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page7.php" method="post" id="form">
        <input type="hidden" name="page" value="6">
    <h1 id="titlepage">QCM Noté : Fonction range()</h1>
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
</code></pre>
            <label for="p2_q2">Réponse: </label>
            <input type="text" class="form-text" name="p2_q2">
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
    y = 0
    for caractere in mot:
        if caractere == 'o':
            y = y + 1
        x = x + 1
    return y/x*100
</code></pre>
            <label for="p2_q2">Réponse: </label>
            <input type="text" class="form-text" name="p2_q2">
        </div>
    </div>
    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>