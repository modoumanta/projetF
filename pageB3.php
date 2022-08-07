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
    $T = [];
    foreach ($_POST as $value) {
        $T[] = $value;
    }
    $I;
    $P;
    $N;
    $T1;
    $A;
    $Per;
    include('Requette.php');
    $donnee = listerBus();
    if ($T[0] != 0) {
        $j = 0;
        while ($tab = mysqli_fetch_array($donnee)) {
            $j++;
            if ($j == $T[0]) { ?>
            <?php
                $_POST['id'] = $tab['id_bus'];
                $_POST['couleur'] = $tab['couleur_bus'];
                $_POST['marque'] = $tab['marque_bus'];
                $_POST['numero'] = $tab['numero_bus'];
                $_POST['chauffeur'] = $tab['id_chauffeur'];
            } ?>
        <?php } ?>
        <?php $I = $_POST['id']; ?>
        <?php $P = $_POST['couleur']; ?>
        <?php $N = $_POST['marque']; ?>
        <?php $T1 = $_POST['numero']; ?>
        <?php $A = $_POST['chauffeur']; ?>
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
            <form action="pageB4.php" method="POST">
                id <input type="text" id="id" class="form-control" name="id" value="<?= $I ?>" readonly>
                <br>
                couleur <input type="text" id="prenom1" class="form-control" name="couleur" value="<?= $P ?>">
                <br>
                marque <input type="text" id="nom1" class="form-control" name="marque" value="<?= $N ?>">
                <br>
                numero <input maxlength="3" type="text" id="tele1" class="form-control" name="numero" value="<?= $T1 ?>">
                <span class="text-danger" hidden id="er">numero invalide</span>
                <br>
                conducteur <select name="chauffeur" id="chauffeur">
                    <?php
                    $donnee1 = listerChauffeur();
                    while ($tab1 = mysqli_fetch_array($donnee1)) {
                        if ($A == $tab1['id_chauffeur']) {
                    ?>
                            <option value="<?= $A ?>" selected><?= $tab1['prenom_chauffeur'] . ' ' . $tab1['nom_chauffeur'] ?></option>
                        <?php } ?>
                        <option value="<?= $tab1['id_chauffeur'] ?>"><?= $tab1['prenom_chauffeur'] . ' ' . $tab1['nom_chauffeur'] ?></option>
                    <?php } ?>
                </select>
                <br>
                <button type="reset" class="btn btn-danger float-right">Annuler</button>
                <button type="submit" class="btn btn-success float-right" onclick="add1()">Envoyer</button>
            </form>
        </div>
    </div>
    <!--SE CONNECTER-->
    <script>
        let prenom1 = document.getElementById('prenom1');
        let nom1 = document.getElementById('nom1');
        let conducteur = document.getElementById('chauffeur');
        let tel1 = document.getElementById('tele1');
        let er = document.getElementById('er');
        tel1.onkeyup = function() {
            if (isNaN(tel1.value) || tel1.value.length > 10 || Number(tel1.value) <= 0) {
                er.removeAttribute('hidden');
            } else {
                er.setAttribute('hidden', '');
            }
        }

        function add1() {
            if (nom1.value == '' || prenom1.value == '' || tel1.value == '' || conducteur.value == '') {
                alert("tous les champs sont obligatoir");
            }
        }
    </script>
</body>

</html>