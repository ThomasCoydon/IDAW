<!DOCTYPE html>
<html>
    <head>
        <title>Emploi du temps</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>Emploi du temps</h1>
        <p>Il est : <?php       
        date_default_timezone_set('Europe/Paris');//Paris = GMT+1
        echo date('H:i:s'). '<br>';
        ?></p>
        

        <p>Tableau des horraires de cours :</p>
        <?php
            $horraires = ['8h', '10h', '14h', '16h'];
            
            //On récupère la taille du tableau et on la stocke dans $taille
            $taille = count($horraires);
            
            //On peut soit parcourir le tableau et afficher les valeurs une à une
            for($i = 0; $i < $taille; $i++){
                echo $horraires[$i]. '  ';
            }
            echo '<br><br>';
        ?>
    </body>
</html>