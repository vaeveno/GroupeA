<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Deuxième défi</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Deuxième page du challenge</h1>
            
            <p>Vous commencez bien, un brin plus technique maintenant</p>
<!--XIV.II.I. -->

            <form action="authenticate-2.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>

<!--Indice : ça ne servira à rien de mettre directement ce qui est trouvé, mais le mot de passe précédent peut vous aider à décoder -->            

        </div>
    </body>
</html>