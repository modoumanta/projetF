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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php
    $U;
    include('Requette.php');
    $donnee = listerBus();
    ?>
    <!--navbar-->
    <nav class="navbar bg-light" style="position: fixe;">
        <div class="container-fluid">
            <div class="" style="display:flex ;">
                <a class="navbar-brand" style="color:gold ;font-size:2em;">A.M.G</a>
                <ul style="display: flex;justify-content: space-between;list-style: none;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color:gold;margin-top:10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            USERS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="page3.php" style="color:gold">AJOUTER</a></li>
                            <li><a class="dropdown-item" href="listeUser.php" style="color:gold">LISTER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color:gold;margin-top:10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CONDUCTOR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="page8.php" style="color:gold">AJOUTER</a></li>
                            <li><a class="dropdown-item" href="listeRecev.php" style="color:gold">LISTER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color:gold;margin-top:10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DRIVER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="pageC1.php" style="color:gold">AJOUTER</a></li>
                            <li><a class="dropdown-item" href="listeDriver.php" style="color:gold">LISTER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color:gold;margin-top:10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BUS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="pageB1.php" style="color:gold">AJOUTER</a></li>
                            <li><a class="dropdown-item" href="listeBus.php" style="color:gold">LISTER</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--navbar-->
    <!--SE CONNECTER-->
    <h1 style="position: absolute;text-align: center;top: 270px;left:36%;color:gold;">LA LISTE DES BUS EST</h1>
    <form action="" method="post">
        <table class="table table-bordered mt-4" style="position: absolute;text-align: center;top: 370px;width:70%;margin-left:15%;">
            <tr class="bg" style="background-color:gold ;color:white;">
                <th>id</th>
                <th>couleur</th>
                <th>marque</th>
                <th>numero</th>
                <th>conducteur</th>
                <th>Actions</th>
            </tr>
            <tbody id="tbody">
                <?php $i = 0;
                while ($tab = mysqli_fetch_array($donnee)) {
                    $i++;
                ?>
                    <tr style="background:white;color:black;">
                        <th><?= $tab['id_bus'] ?></th>
                        <th><?= $tab['couleur_bus'] ?></th>
                        <th><?= $tab['marque_bus'] ?></th>
                        <th><?= $tab['numero_bus'] ?></th>
                        <?php
                        $donnee1 = listerChauffeur();
                        while ($tab1 = mysqli_fetch_array($donnee1)) {
                            if ($tab['id_chauffeur'] == $tab1['id_chauffeur']) {
                        ?>
                            <th><?= $tab1['prenom_chauffeur'] . ' ' . $tab1['nom_chauffeur'] ?></th>
                        <?php  }
                        } ?>
                        <th>
                            <button class="btn btn-sm" style="background-color: blue;color:white;" onclick="Modifier(<?= $i ?>)" name="modifier<?= $i ?>" value="<?= $i ?>" formaction="pageB3.php">Modifier</button>
                            <button class="btn btn-danger btn-sm" onclick="Supprimer(<?= $i ?>)" name="delete<?= $i ?>" value="<?= $i ?>" formaction="pageB5.php">Supprimer</button>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <!--SE CONNECTER-->
</body>
<footer style="background-color: white;">
    <a href="pageacceuil.php" style="text-decoration:none;color:gold;">RETOUR</a>
</footer>

</html>