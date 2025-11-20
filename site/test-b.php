<?php
session_start();
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

            <h1>Groupe <?= $id ?> : Test d'introduction - 2e partie </h1>

            <form action="authenticate-b.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Le mot de passe est... caché quelque part, saurez-vous le découvrir ?</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>

         

        </div>
    </body>

            <p>orange</p>
</html>
