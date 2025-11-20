<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <!-- Pas grand chose à dire, on passe du sport à la diffusion -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Sixième défi</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Sixième page du challenge</h1>
            
            <p>Gardons le même mais changeons de sujet en lisant ça autrement. Je dirais bien qu'on revient aux source, mais c'est plutôt une deuxième vue.</p>

            <form action="authenticate-6.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>          

        </div>
    </body>
</html>