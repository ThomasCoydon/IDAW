<?php

print_r($_POST);
addAlimentToDB();

function addAlimentToDB(){
    require_once('config.php');

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = 
        "INSERT INTO aliment(id, nom, categorie, calories, eau, sucre, sel, glucides, proteines) 
        VALUES (".
            $_POST['id'].",".
            "'".$_POST['name']."',".
            "'".$_POST['type']."',".
            "'".$_POST['calories']."',".
            "'".$_POST['water']."',".
            "'".$_POST['sugar']."',".
            "'".$_POST['salt']."',".
            "'".$_POST['glucides']."',".
            "'".$_POST['proteines']."')";
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}