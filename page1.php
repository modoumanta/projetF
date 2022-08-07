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
    <div class="card col-md-6 offset-3 cd12">
        <form action="page2.php" method="POST" style="justify-content:center;">
            <div class="card-header">Formulaire</div>
            <div class="card-body">
                <input type="text" class="form-control" id="login" placeholder="login" name="login" value="" />
                <br>
                <input type="password" class="form-control" id="mdp" placeholder="password" name="mdp" value="" />
                <button class="btn btn-success float-right" onclick="connecter()" type="submit">connecter</button>
            </div>
        </form>
    </div>
    <!--SE CONNECTER-->
</body>

</html>