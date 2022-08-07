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
    <!--navbar-->
    <nav class="navbar bg-light" style="position: fixe;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:gold ;font-size:2em;">A.M.G</a>
            <a class="navbar-brand" href="indexe.php" style="text-decoration:none;color:gold;margin-top:10px;">RETOUR</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--navbar-->
    <!--SE CONNECTER-->
    <div class="card col-md-6 offset-3 mt-5">
        <div class="card-header">Formulaire D'inscription</div>
        <div class="card-body">
            <form action="page4.php" method="POST">
                Login<input type="text" id="login1" class="form-control" name="login1" value="">
                <br>
                Prénom <input type="text" id="prenom" class="form-control" name="prenom" value="">
                <br>
                Nom <input type="text" id="nom" class="form-control" name="nom" value="">
                <br>
                Téléphone <input maxlength="10" type="text" id="tele" class="form-control" name="tel" value="">
                <span class="text-danger" hidden id="erreur">Téléphone invalide</span>
                <br>
                Email <input type="email" id="email" class="form-control" name="email" value="">
                <br>
                Mot de passe <input type="password" id="mdp1" class="form-control" name="mdp1" value="">
                <br>
                <button type="reset" class="btn btn-danger float-right">Annuler</button>
                <button type="submit" class="btn btn-success float-right" onclick="add()">Envoyer</button>
            </form>
        </div>
    </div>
    <!--SE CONNECTER-->
</body>
<footer style="background-color: white;">
</footer>
</html>