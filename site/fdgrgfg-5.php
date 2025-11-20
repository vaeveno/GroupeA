<?php
session_start();
$id=$_SESSION['groupe'];


?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-6-4">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Cinquième défi</title>
        <link href="stylet-9-2.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Cinquième page du challenge</h1>
            
            <p>Incroyable match ! ça vaut le coup de se prendre un peu la tête pour ce genre de performance individuelle, quelles stats !</p>
<!-- la série se poursuit pour cette épreuve, 12-2 comme dirait l'autre, mais il suffit de lire la phrase d'instruction pour trouver. -->

            <form action="authenticate-5.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>


        </div>
    </body>
</html>