<!DOCTYPE html>
<html>
    <head>
        <title>Test de connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'idaw';

try{
    $dbco = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sth = $dbco->prepare("SELECT * FROM users");
    $sth->execute();

    $users = $sth->fetchall(PDO::FETCH_ASSOC);
}
    catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }
    echo'<pre>';
    print_r($users);
    echo'</pre>';
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if(isset($_POST['login']) && isset($_POST['password'])) {
$tryLogin=$_POST['login'];
$tryPwd=$_POST['password'];


foreach($user) {
    if ($user['login']==$tryLogin && $user['password']==$tryPwd){
        $successfullyLogged = true;
        $login = $tryLogin;
        session_start();
        $_SESSION['login'] = $login;
    }




// si login existe et password correspond
// if( array_key_exists($tryLogin,$users['login']) && $users['password']==$tryPwd ) {
//     $successfullyLogged = true;
//     $login = $tryLogin;
//     session_start();
//     $_SESSION['login'] = $login;
} else
    $errorText = "Erreur de login/password";
} else
    $errorText = "Merci d'utiliser le formulaire de login";

if(!$successfullyLogged) {
    echo $errorText;
} else {
    echo '<h1>Bienvenue '.$_SESSION['login'].'</h1>
    <nav class="menu">
        <ul>
            <li><a href="style.php"> Changer de style</a></li>
            <li><a href="deconnexion.php"> Déconnexion</a></li>
        </ul>
    </nav>';
}
?>
</body>
</html>