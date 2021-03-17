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
            $password = '';
            $db_name = 'idaw';

            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
                $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sth = $dbco->prepare("SELECT * FROM users");
                $sth->execute();

                $resultat = $sth->fetchall(PDO::FETCH_ASSOC);

                echo'<pre>';
                print_r($resultat);
                echo'</pre>';
            }

            catch(PDOException $e){
                echo "Erreur : ".$e->getMessage();
            }        
        ?>
    </body>
</html>