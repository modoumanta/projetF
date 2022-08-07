<?php
include('Requette.php');
$nom = $_POST['nom'];
$id = $_POST['id'];
$prenom = $_POST['prenom'];
$telephone = $_POST['tel'];
$age = $_POST['age'];
$permis = $_POST['permis'];
if ($nom != '' && $prenom != '' && $telephone != '' && $age != '' && $permis != '') {
    modifierChauffeur($id, $nom, $prenom, $telephone, $age, $permis);
    header('location:listeDriver.php');
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
        <?php $Per = $_POST['permis']; ?>
        <!--SE CONNECTER-->
        <div class="card col-md-6 offset-3 mt-5">
            <div class="card-header">Formulaire</div>
            <div class="card-body">
                <form action="pageC4.php" method="POST">
                    id <input type="text" id="id" class="form-control" name="id" value="<?= $I ?>" readonly>
                    <br>
                    Prénom <input type="text" id="prenom1" class="form-control" name="prenom" value="<?= $P ?>">
                    <br>
                    Nom <input type="text" id="nom1" class="form-control" name="nom" value="<?= $N ?>">
                    <br>
                    Téléphone <input maxlength="10" type="text" id="tele1" class="form-control" name="tel" value="<?= $T1 ?>">
                    <span class="text-danger" hidden id="erreur1">Téléphone invalide</span>
                    <br>
                    age <input type="text" id="age1" class="form-control" name="age" value="<?= $A ?>">
                    <span class="text-danger" hidden id="err">age invalide</span>
                    <br>
                    Type_permis <select name="permis" id="permis">
                        <option value="<?= $Per ?>" selected><?= $Per ?></option>
                        <option value="Permis A">Permis A</option>
                        <option value="Permis B">Permis B</option>
                    </select>
                    <button type="reset" class="btn btn-danger float-right">Annuler</button>
                    <button type="submit" class="btn btn-success float-right" onclick="add1()">Envoyer</button>
                </form>
            </div>
        </div>
        <!--SE CONNECTER-->
        <script>
        let prenom = document.getElementById('prenom1');
        let nom = document.getElementById('nom1');
        let permis = document.getElementById('permis');
        let tel1 = document.getElementById('tele1');
        let age = document.getElementById('age1');
        let er = document.getElementById('err');
        let er1 = document.getElementById('erreur1');
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
            if (nom.value == '' || prenom.value == '' || tel1.value == '' || age.value == '' || permis.value == '') {
                alert("tous les champs sont obligatoir");
            }
        }
    </script>
    </body>

    </html>

<?php } ?>