<?php
    include('Requette.php');
    $nom=$_POST['nom']; 
    $prenom=$_POST['prenom']; 
    $age=$_POST['age'] ;
    $telephone=$_POST['tel'] ;
    $permis=$_POST['permis'];
    if ($nom!='' && $prenom!='' && $age!='' && $telephone!='' && $permis!='') {
        insererChauffeur($nom, $prenom, $telephone,$age, $permis);
        header('location:pageacceuil.php');
    }
    else {
        header('location:pageC1.php');
    }
?>