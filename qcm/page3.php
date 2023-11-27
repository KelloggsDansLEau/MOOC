<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page4.php" method="post" id="form">
        <input type="hidden" name="page" value="1">
    <h1 id="titlepage">QCM Noté : les Algorithmes</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 2</p>
        </div>
        <div class="content">
            <p>On considère l'algorithme compte_voiture_rouges qui compte le nombre de voitures rouges.</p>
            <p>Reconstituez la séquence d'instructions dans le bon ordre.</p>
            
            <pre>
<code>
<span class="underline">algo</span>: compte_voitures_rouges
    <span class="underline">paramètres</span>: liste_voitures (liste) : la liste des voitures
    <span class="underline">résutat</span>: (entier) : le nombre de voitures rouges
    début :
    <select id="p1_q1_1" name="p1_q1_1">
        <option value=""></option>
        <option value="1">mettre 0 dans le compteur</option>
        <option value="2">si la voiture est rouge</option>
        <option value="3">pour chaque voiture dans la liste_voitures</option>
        <option value="4">ajouter 1 au compteur</option>
        <option value="5">retourner le compteur</option>
    </select>
    <select id="p1_q1_1" name="p1_q1_1">
        <option value=""></option>
        <option value="1">mettre 0 dans le compteur</option>
        <option value="2">si la voiture est rouge</option>
        <option value="3">pour chaque voiture dans la liste_voitures</option>
        <option value="4">ajouter 1 au compteur</option>
        <option value="5">retourner le compteur</option>
    </select>
        <select id="p1_q1_1" name="p1_q1_1">
            <option value=""></option>
            <option value="1">mettre 0 dans le compteur</option>
            <option value="2">si la voiture est rouge</option>
            <option value="3">pour chaque voiture dans la liste_voitures</option>
            <option value="4">ajouter 1 au compteur</option>
            <option value="5">retourner le compteur</option>
        </select>
            <select id="p1_q1_1" name="p1_q1_1">
                <option value=""></option>
                <option value="1">mettre 0 dans le compteur</option>
                <option value="2">si la voiture est rouge</option>
                <option value="3">pour chaque voiture dans la liste_voitures</option>
                <option value="4">ajouter 1 au compteur</option>
                <option value="5">retourner le compteur</option>
            </select>
    <select id="p1_q1_1" name="p1_q1_1">
        <option value=""></option>
        <option value="1">mettre 0 dans le compteur</option>
        <option value="2">si la voiture est rouge</option>
        <option value="3">pour chaque voiture dans la liste_voitures</option>
        <option value="4">ajouter 1 au compteur</option>
        <option value="5">retourner le compteur</option>
    </select>
</code>
            </pre>
            
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 2</p>
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
            <select id="p3_q2" name="p3_q2">
                <option value=""></option>
                <option value="c1">Lorem ipsum dolor sit amet</option>
                <option value="c2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</option>
                <option value="c3">Indique si il y a plus de voyelles que de consonnes dans un mot</option>
                <option value="c2">Lorem ipsum dolor sit amet consectetur adipisicing.</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>