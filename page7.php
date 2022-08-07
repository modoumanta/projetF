<?php
$T=[];
foreach ($_POST as $value) {
    $T[]=$value;
}
$id;
$I;
include('Requette.php');
    $donnee = listerUtilisateur();
        if ($T[0]!=0) {
            $j = 0;
            while ($tab = mysqli_fetch_array($donnee)) {
                $j++;
                if ($j == $T[0]) { 
                    $I = $tab['id_utilisateur'];
                }
             }
        }
        $id=$I;
    supprimerUtilisateur($id);
    header('location:listeUser.php');
?>
<form action="" method="post"></form>
