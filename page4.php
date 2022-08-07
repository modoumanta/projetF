<?php
    include('Requette.php');
    $nom=$_POST['nom']; 
    $prenom=$_POST['prenom']; 
    $mail=$_POST['email'] ;
    $telephone=$_POST['tel'] ;
    $login=$_POST['login1'] ;
    $password=$_POST['mdp1'];
    if ($nom!='' && $prenom!='' && $mail!='' && $telephone!='' && $login!='' && $password!='') {
        insererUtilisateur($nom, $prenom, $mail, $telephone, $login, $password);
        header('location:indexe.php');
    }
    else {
        header('location:page3.php');
    }
?>