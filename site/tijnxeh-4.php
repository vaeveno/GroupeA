<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Quatrième défi</title>
        <link href="excel.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Quatrième page du challenge</h1>
            
            <p>Le 45959, son équipe les a affronté. Mais qui cela peut-il bien être ?</p>

            <form action="authenticate-4.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>


        </div>
    </body>
</html>