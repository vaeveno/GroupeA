<?php
session_start();

$id=$_SESSION['groupe'];

$DATABASE_HOST = 'sql100.infinityfree.com';
$DATABASE_USER = 'if0_40453480';
$DATABASE_PASS = 'l3NRD27Zeov';
$DATABASE_NAME = 'if0_40453480_mondata';
// Try and connect using the info above
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Ensure there are no connection errors

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT progres FROM progression WHERE id = ?');
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $id);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database
    $stmt->store_result();
    
    $stmt->bind_result($progres);
    $stmt->fetch();

if ($progres!=10) {
    exit('Intrusion');
} else {

    $stmt = $con->prepare('UPDATE progression SET progres=20 WHERE id=?');
            // Bind POST data to the prepared statement
            $stmt->bind_param('s', $id);
            $stmt->execute();
        $stmt->close();
}
?>
<!DOCTYPE html>
<html class="bleu">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Fin</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">

            <h1>Victoire !</h1>
            
            <p>Le Groupe <?= $id ?> a trouvé tous les mots de passe, merci d'avoir participé.</p>      

        </div>
    </body>
</html>