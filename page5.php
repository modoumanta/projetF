<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="projet.css">
    <script src="java.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <title>Document</title>
</head>

<body>
<?php
$T=[];
foreach ($_POST as $value) {
    $T[]=$value;
}
    $I;$L;$P;$N;$T;$E;$M;
    include('Requette.php');
    $donnee = listerUtilisateur();
        if ($T[0]!=0) {
            $j = 0;
            while ($tab = mysqli_fetch_array($donnee)) {
                $j++;
                if ($j == $T[0]) { ?>
                <?php
                    $_POST['id'] = $tab['id_utilisateur'];
                    $_POST['login1'] = $tab['login_utilisateur'];
                    $_POST['prenom'] = $tab['prenom_utilisateur'];
                    $_POST['nom'] = $tab['nom_utilisateur'];
                    $_POST['tel'] = $tab['telephone_utilisateur'];
                    $_POST['email'] = $tab['mail_utilisateur'];
                    $_POST['mdp1'] = $tab['password_utilisateur'];
                } ?>
            <?php } ?>
            <?php $I = $_POST['id']; ?>
            <?php $L = $_POST['login1']; ?>
            <?php $P = $_POST['prenom']; ?>
            <?php $N = $_POST['nom']; ?>
            <?php $T = $_POST['tel']; ?>
            <?php $E = $_POST['email']; ?>
            <?php $M = $_POST['mdp1']; ?>
        <?php } ?>
    <!--navbar-->
    <nav class="navbar bg-light" style="position: fixe;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:gold ;font-size:2em;">A.M.G</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--navbar-->
    <!--SE CONNECTER-->
    <div class="card col-md-6 offset-3 mt-5">
        <div class="card-header">Formulaire</div>
        <div class="card-body">
            <form action="page6.php" method="POST">
                id<input type="text" id="id" class="form-control" name="id" value="<?= $I ?>" readonly>
                <br>
                Login<input type="text" id="login1" class="form-control" name="login1" value="<?= $L ?>">
                <br>
                Prénom <input type="text" id="prenom" class="form-control" name="prenom" value="<?= $P ?>">
                <br>
                Nom <input type="text" id="nom" class="form-control" name="nom" value="<?= $N ?>">
                <br>
                Téléphone <input maxlength="10" type="text" id="tele" class="form-control" name="tel" value="<?= $T ?>">
                <span class="text-danger" hidden id="erreur">Téléphone invalide</span>
                <br>
                Email <input type="email" id="email" class="form-control" name="email" value="<?= $E ?>">
                <br>
                Mot de passe <input type="password" id="mdp1" class="form-control" name="mdp1" value="<?= $M ?>">
                <br>
                <button type="reset" class="btn btn-danger float-right">Annuler</button>
                <button type="submit" class="btn btn-success float-right" onclick="add()">Envoyer</button>
            </form>
        </div>
    </div>
    <!--SE CONNECTER-->
</body>

</html>