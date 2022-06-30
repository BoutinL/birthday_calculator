<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'anniversaire</title>
</head>
<body>
    <h1>Calcul d'anniversaire</h1>
    <form action='index.php' method='POST'>
        <label>
            <span>Pourrier-vous nous indiquer votre prénom ?</span>
            <br>
            <input type="text" name="prenom">
        </label>
        <fieldset>
            <legend>Veuillez compléter les champs ci-après</legend>
            <label>
                <span>Jour de naissance</span>
                <br>
                <input type="text" name="jourNaissance">
                <span>(en chiffres)</span><br>
            </label>
            <label>
                <span>Mois de naissance</span>
                <br>
                <input type="text" name="moisNaissance">
                <span>(en chiffres)</span>
                <br>
            </label>
            <input type="submit" value="Calculer" name="submit">
        </fieldset>
    </form>
    <?php

    ?>
</body>
</html>