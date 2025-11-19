<?php
if (!isset($_POST['mdp'])) {
    exit('Merci de rentrer le mot de passe!');
}
if ($_POST['mdp']=='NBA') {
    header('Location: jdfgsbb-2.php');
}
else {
        // Incorrect password
        ?>
        <script>
            alert('mot de passe incorrect');
            window.location.href='xpltdg-1.php?fail';
        </script>
        <?php
    }

?>
