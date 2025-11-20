<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8"1>
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title 4>Troisième défi</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Troisième page du challenge</h1>
            
            <p>Le défi se poursuit tranquillement et une thématique se dessine.</p>

            <form action="authenticate-3.php" method="post" class="form login-form" T>

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required O>
                </div>

                <button class="btn blue" type="submit"R>Confirmation</button>
            </form>

<!-- Ce serait trop facile de donner directement la réponse n'est-ce pas ? -->         

        </div>
    </body>
</html>