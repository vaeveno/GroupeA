<?php
session_start();

//connection base de donnée
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

$_POST['id']=strtoupper($_POST['id']);

if ($stmt = $con->prepare('SELECT * FROM progression WHERE id = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['id']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database
    $stmt->store_result();
    
    // Check if account exists
if ($stmt->num_rows > 0) {
    // Account exists, so bind the results to variables
    $stmt->bind_result($id, $progres);
    $stmt->fetch();

    ?>
    <!DOCTYPE html>
<html class="bleu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Reprise</title>
        <link href="style/stylet.css" rel="stylesheet" type="text/css">
    </head>
    <body class="coc">
        <div class="login">
            <p><?=$progres ?> mots de passe découverts sur 11.</p>

            <form action="reprise-process.php" method="post" class="form login-form">

                <label class="form-label" for="id">Reprendre votre progression ?</label>
				<input type="hidden" id="id" name="id" value="<?= $id ?>">
                <input type="hidden" id="progres" name="progres" value="<?= $progres ?>">
                <button class="btn blue" type="submit">OUI</button>
            </form>
            
             <form action="recommencer-process.php" method="post" class="form login-form">
				<input type="hidden" id="id" name="id" value="<?= $id ?>">
                <input type="hidden" id="progres" name="progres" value="<?= $progres ?>">
                <button class="btn blue" type="submit">NON</button> 
            </form>
            
        </div>
    </body>
</html>
    <?
} else
{
    $stmt = $con->prepare('INSERT INTO progression (id) VALUES (?)');
            // Bind POST data to the prepared statement
            $stmt->bind_param('s', $_POST['id']);
            $stmt->execute();
    $_SESSION['groupe']=$_POST['id'];
    
    header('Location: test-a.php');
}
}