<?php
    include('Requette.php');
    $nom=$_POST['nom']; 
    $prenom=$_POST['prenom']; 
    $age=$_POST['age'] ;
    $telephone=$_POST['tel'] ;
    if ($nom!='' && $prenom!='' && $telephone!='' && $age!='') {
        insererReceveur($nom, $prenom, $telephone, $age);
        header('location:pageacceuil.php');
    }
    else {
        header('location:page8.php');
    }
?>