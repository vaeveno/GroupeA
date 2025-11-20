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

$stmt = $con->prepare('SELECT adresse FROM liste WHERE id_l = ?');
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('i', $_POST['progres']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database
    $stmt->store_result();
    
    $stmt->bind_result($adresse);
    $stmt->fetch();
$_SESSION['groupe']=$_POST['id'];

header('Location: '.$adresse.'.php');

?>