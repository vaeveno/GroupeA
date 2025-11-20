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

    $stmt = $con->prepare('UPDATE progression SET progres=0 WHERE id=?');
            // Bind POST data to the prepared statement
            $stmt->bind_param('s', $_POST['id']);
            $stmt->execute();
        $stmt->close();
    $_SESSION['groupe']=$_POST['id'];
    
    header('Location: test-a.php');

?>