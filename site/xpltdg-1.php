<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Premier défi</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Première page du challenge</h1>
            
            <p>Vous avez réussi à passer l'introduction, poursuivrez vous sur votre lancée ?</p>
            <p style="color:#FFFFFF;">basketball</p>

            <form action="authenticate-1.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>

            

        </div>
    </body>
</html>