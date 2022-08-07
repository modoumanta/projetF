<?php

include 'DB.php';

//Utilisateur
function listerUtilisateur()
{
    $sql = 'SELECT * FROM `utilisateur`';
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function insererUtilisateur($nom, $prenom, $mail, $telephone, $login, $password)
{
    $sql = "INSERT  INTO `utilisateur` (id_utilisateur,nom_utilisateur,prenom_utilisateur,mail_utilisateur,telephone_utilisateur,login_utilisateur,password_utilisateur) VALUES(NULL,'$nom','$prenom','$mail','$telephone','$login','$password')";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function modifierUtilisateur(
    $id,
    $nom,
    $prenom,
    $mail,
    $telephone,
    $login,
    $password
) {
    $sql = "UPDATE `utilisateur` SET nom_utilisateur='$nom',prenom_utilisateur='$prenom',mail_utilisateur='$mail',telephone_utilisateur='$telephone',login_utilisateur='$login',password_utilisateur='$password' where id_utilisateur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function supprimerUtilisateur($id)
{
    $sql = "DELETE FROM `utilisateur` WHERE id_utilisateur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

//Receveur
function listerReceveur()
{
    $sql = 'SELECT * FROM `receveur`';
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function insererReceveur($nom, $prenom, $telephone, $age)
{
    $sql = "INSERT  INTO `receveur` (id_receveur,nom_receveur,prenom_receveur,telephone_receveur,age_receveur) VALUES(NULL,'$nom','$prenom','$telephone','$age')";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function modifierReceveur($id, $nom, $prenom, $telephone, $age)
{
    $sql = "UPDATE `receveur` SET nom_receveur='$nom',prenom_receveur='$prenom',telephone_receveur='$telephone',age_receveur='$age' where id_receveur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function supprimerReceveur($id)
{
    $sql = "DELETE FROM `receveur` WHERE id_receveur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

//Chauffeur
function listerChauffeur()
{
    $sql = 'SELECT * FROM `chauffeur`';
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function insererChauffeur($nom, $prenom, $telephone, $age, $permis)
{
    $sql = "INSERT  INTO `chauffeur` (id_chauffeur,nom_chauffeur,prenom_chauffeur,telephone_chauffeur,age,permis_chauffeur) VALUES(NULL,'$nom','$prenom','$telephone','$age','$permis')";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function modifierChauffeur($id, $nom, $prenom, $telephone, $age, $permis)
{
    $sql = "UPDATE `chauffeur` SET nom_chauffeur='$nom',prenom_chauffeur='$prenom',telephone_chauffeur='$telephone',age='$age',permis_chauffeur='$permis' where id_chauffeur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function supprimerChauffeur($id)
{
    $sql = "DELETE FROM `chauffeur` WHERE id_chauffeur='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

//Bus
function listerBus()
{
    $sql = 'SELECT * FROM `bus`';
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function insererBus($couleur, $marque, $numero, $chauffeur)
{
    $sql = "INSERT  INTO `bus` (id_bus,couleur_bus,marque_bus,numero_bus,id_chauffeur) VALUES(NULL,'$couleur','$marque','$numero','$chauffeur')";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function modifierBus($id, $couleur, $marque, $numero, $chauffeur)
{
    $sql = "UPDATE `bus` SET couleur_bus='$couleur',marque_bus='$marque',numero_bus='$numero',id_chauffeur='$chauffeur' where id_bus='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}

function supprimerBus($id)
{
    $sql = "DELETE FROM `bus` WHERE id_bus='$id'";
    $con = Connexion();
    $resultat = mysqli_query($con, $sql);
    return $resultat;
}
