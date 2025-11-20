<?php
// Start the session
session_start();
// Destroy the active session, which logs the user out
session_destroy();
?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Page d'accueil</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Challenge du Groupe A</h1>
            
            <p>Bienvenue sur le site du Challenge du Groupe A !</p>
                <p>Votre quête sera simple : passer de page en page en découvrant à chaque fois le mot de passe qui bloque votre progression.</p>
                <p>Pour vous échauffer vous aurez droit à un petit test d'introduction à la page suivante.</p>
            <p>Détails :</p>
            - Merci de ne pas utiliser les flèches de retour et d'avance, cela risque de vous éjecter du site.
            <BR>- Si cela vous arrive, revenez à cette page, rentrez de nouveau votre identifiant et valider, il vous sera proposé de recommencer ou reprendre vos progrès.
            <BR>- Le nombre d'essai est illimité pour chaque mot de passe.
            <BR>- Vous avez 11 mots de passe à découvrir.</p>

            <form action="reprise.php" method="post" class="form login-form">

                <label class="form-label" for="id">Merci d'indiquer l'identifiant de votre Groupe avant de débuter le Challenge</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="text" name="id" placeholder="A ou B ou C, etc." maxlength="1" id="id" required>
                </div>

                <button class="btn blue" type="submit">Débuter le challenge</button>
            </form>
            
        </div>
    </body>
</html>