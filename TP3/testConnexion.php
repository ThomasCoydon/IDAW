<!DOCTYPE html>
<html>
    <head>
        <title>Test de connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username);
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie';
        
        ?>
    </body>
</html>