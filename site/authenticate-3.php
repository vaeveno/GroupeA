<?php
    session_start();
if (!isset($_POST['mdp'])) {
    exit('Intrusion');
}
if (strtoupper($_POST['mdp'])=='JA’KOBE WALTER' || strtoupper($_POST['mdp'])=="JA'KOBE WALTER" || strtoupper($_POST['mdp'])=='JAKOBE WALTER' || strtoupper($_POST['mdp'])=='JAKOBEWALTER' || strtoupper($_POST['mdp'])=='JA’KOBEWALTER' || strtoupper($_POST['mdp'])=="JA'KOBEWALTER") {
    
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

    $stmt = $con->prepare("UPDATE progression SET progres=5 WHERE id=?");
    // Bind POST data to the prepared statement
    $stmt->bind_param('s', $_SESSION['group']);
    $stmt->execute();
    $stmt->close();
    
    header('Location: tijnxeh-4.php');
}
else {
        // Incorrect password
        ?>
        <script>
            alert('mot de passe incorrect');
            window.location.href='frsuhjfd-3.php?fail';
        </script>
        <?php
    }

?>