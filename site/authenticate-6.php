<?php
    session_start();
if (!isset($_POST['mdp'])) {
    exit('Intrusion');
}
if (strtoupper($_POST['mdp'])=='BBC' || strtoupper($_POST['mdp'])=='B.B.C.' || strtoupper($_POST['mdp'])=='B B C' || strtoupper($_POST['mdp'])=='B.B.C' || strtoupper($_POST['mdp'])=='B-B-C') {
    
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

    $stmt = $con->prepare('UPDATE progression SET progres=8 WHERE id=?');
            // Bind POST data to the prepared statement
            $stmt->bind_param('s', $_SESSION['groupe']);
            $stmt->execute();
        $stmt->close();
    
    header('Location: srbdxv-7.php');
}
else {
        // Incorrect password
        ?>
        <script>
            alert('mot de passe incorrect');
            window.location.href='zogffxv-6.php?fail';
        </script>
        <?php
    }

?>