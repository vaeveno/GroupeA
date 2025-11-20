<?php
session_start();
$_SESSION['groupe'];
$id=$_SESSION['groupe'];
?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Test</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Groupe <?= $id ?> : Test d'introduction </h1>
            
            <p>Les mots de passe ignorent les majuscules et minuscule, tant que le mot de passe est valide vous pourrez passer à l'étape suivante<p>

            <form action="authenticate-a.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Le mot de passe est "prune".</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>

            

        </div>
    </body>
</html>