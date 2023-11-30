<!DOCTYPE html>
<html lang="fr">

<body>
    <?php include('structure.php'); 
    $score = $_POST['score']/17*20;
    ?>

    <div class="congrats">
        <h2>Souhaitez vous inscrire votre score de <?php echo $score?>/20,00 au Classement ?</h2>
        <form action="reqlboard.php" method="post">
            <input type="hidden" name="score" value="<?php echo $score?>">

            <label for="nom">Nom: </label>
            <input type="text" class="form-text" name="nom" required>
            <button class="button-65">M'inscrire</button>
        </form>
        <a href="index.html"><button class="button-65">Non, Retour à l'accueil</button></a>
    </div>

    <main>

    </main>
</body>
</html>