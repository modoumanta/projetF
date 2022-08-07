<?php
$T=[];
foreach ($_POST as $value) {
    $T[]=$value;
}
$id;
$I;
include('Requette.php');
    $donnee = listerReceveur();
        if ($T[0]!=0) {
            $j = 0;
            while ($tab = mysqli_fetch_array($donnee)) {
                $j++;
                if ($j == $T[0]) { 
                    $I = $tab['id_receveur'];
                }
             }
        }
        $id=$I;
    supprimerReceveur($id);
    header('location:listeRecev.php');
?>
<form action="" method="post"></form>
