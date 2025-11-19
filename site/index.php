<?php
session_start();

if (isset($_SESSION['group'])) {
    header('Location: tri.php');
    exit;
}
}
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
            
            <p>Merci d'indiquer l'identifiant de votre Groupe avant de débuter le Challenge</p>

            <form action="xpltdg-1.html" method="post" class="form login-form">

                <label class="form-label" for="id">Identifiant du groupe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="text" name="id" placeholder="id" id="id" required>
                </div>

                <button class="btn blue" type="submit">Débuter le challenge</button>
            </form>

            

        </div>
    </body>
</html>

