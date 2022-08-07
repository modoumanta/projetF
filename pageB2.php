<?php
    include('Requette.php');
    $couleur=$_POST['couleur']; 
    $marque=$_POST['marque']; 
    $numero=$_POST['numero'] ;
    $chauffeur=$_POST['chauffeur'] ;
    if ($couleur!='' && $marque!='' && $numero!='' && $chauffeur!='') {
        insererBus($couleur, $marque, $numero,$chauffeur);
        header('location:pageacceuil.php');
    }
    else {
        header('location:pageB1.php');
    }
?>