<?php
session_start();
$id=$_SESSION['groupe'];

?>
<!DOCTYPE html>
<html class="bleu">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Septième défi</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Septième page du challenge</h1>
            
            <p>Bon, je commence à tomber en panne d'inspiration pour le basket... Mais heureusement je connais des références plus obscures !.</p>
            <p>Laissez moi réfléchir un peu sur comment tourner tout ça...
                <BR>
            <BR><i>Il était une fois des monstres, des secrets et des auteurs. 
                <BR>Ces derniers décidèrent qu'au milieu des uns et des autres il faudrait mettre un match de basket. 
                <BR>C'est une amusante coïncidence qu'eux aussi aient pour sigle trois lettres capitales.
            <BR>Aucun indice caché, aucune lettre ou chiffre placé entre deux grésillements d'écran.
            <BR>Il faudra se contenter de savoir chercher.
            <BR>Mais bon prince que je suis je vais vous offrir la réponse sur un plateau d'argent.
            <BR>Car comme le chiffre de la bête est 666, celui de ce match est 1733.
            <BR>Mais maintenant que vous avez trouvé son numéro, kézaco de ce que vous devrez rédiger ?
            <BR>Allons par cent-douze chemins. Dites moi d'où ils ont sauté, voilà votre clé des champs.
                <BR>Ne vous en faites pas, tout n'est que fiction.</i></p>

            <form action="authenticate-7.php" method="post" class="form login-form">

                <label class="form-label" for="mdp">Mot de passe</label>
                <div class="form-group mar-bot-5">
                    <input class="form-input" type="password" name="mdp" placeholder="mdp" id="mdp" required>
                </div>

                <button class="btn blue" type="submit">Confirmation</button>
            </form>          

        </div>
    </body>
</html>