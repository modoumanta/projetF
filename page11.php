<?php
include('Requette.php');
$nom = $_POST['nom'];
$id = $_POST['id'];
$prenom = $_POST['prenom'];
$telephone = $_POST['tel'];
$age = $_POST['age'];
if ($nom != '' && $prenom != '' && $telephone != '' && $age != '') {
    modifierReceveur($id, $nom, $prenom, $telephone, $age);
    header('location:listeRecev.php');
} else { ?>
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
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" style="color:gold ;font-size:2em;">A.M.G</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!--navbar-->
        <?php $I = $_POST['id']; ?>
        <?php $P = $_POST['prenom']; ?>
        <?php $N = $_POST['nom']; ?>
        <?php $T1 = $_POST['tel']; ?>
        <?php $A = $_POST['age']; ?>
        <!--SE CONNECTER-->
        <div class="card col-md-6 offset-3 mt-5">
            <div class="card-header">Formulaire</div>
            <div class="card-body">
                <form action="page11.php" method="POST">
                    id<input type="text" id="id" class="form-control" name="id" value="<?= $I ?>" readonly>
                    <br>
                    Prénom <input type="text" id="prenom1" class="form-control" name="prenom" value="<?= $P ?>">
                    <br>
                    Nom <input type="text" id="nom1" class="form-control" name="nom" value="<?= $N ?>">
                    <br>
                    Téléphone <input maxlength="10" type="text" id="tele1" class="form-control" name="tel" value="<?= $T1 ?>">
                    <span class="text-danger" hidden id="erreur2">Téléphone invalide</span>
                    <br>
                    age <input type="text" id="age1" class="form-control" name="age" value="<?= $A ?>">
                    <span class="text-danger" hidden id="err2">age invalide</span>
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
            let tel1 = document.getElementById('tele1');
            let age = document.getElementById('age1');
            let er = document.getElementById('err2');
            let er1 = document.getElementById('erreur2');
            tel1.onkeyup = function() {
                if (isNaN(tel1.value) || tel1.value.length > 10 || Number(tel1.value) <= 0) {
                    er1.removeAttribute('hidden');
                } else {
                    er1.setAttribute('hidden', '');
                }
            }
            age.onkeyup = function() {
                if (isNaN(age.value) || age.value.length > 10 || Number(age.value) <= 0) {
                    er.removeAttribute('hidden');
                } else {
                    er.setAttribute('hidden', '');
                }
            }

            function add1() {
                if (nom1.value == '' || prenom1.value == '' || tel1.value == '' || age.value == '') {
                    alert("tous les champs sont obligatoir");
                }
            }
        </script>
    </body>

    </html>

<?php } ?>