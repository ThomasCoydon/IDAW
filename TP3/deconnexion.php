<?php
session_start();
session_unset();
session_destroy();
echo'
<h1>Vous êtes déconnecté</h1>
<li><a href="login.php"> Connexion</a></li>';
?>