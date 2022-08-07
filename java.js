let erreur1 = document.getElementById('erreurSolde');
let mdp = document.getElementById('mdp')
let login = document.getElementById('login')
function connecter() {
    if (mdp.value == '' || login.value == '') {
        erreur1.removeAttribute('hidden');
        alert("tous les champs sont obligatoir");
    }
}
/*if (isNaN(solde.value) || solde.value < 10000) {
    erreurSolde.removeAttribute('hidden');
} else {
    erreurSolde.setAttribute('hidden', '');
}*/

let login1 = document.getElementById('login1');
let mdp1 = document.getElementById('mdp1');
let prenom = document.getElementById('prenom');
let nom = document.getElementById('nom');
let tel = document.getElementById('tele');
let prenom1 = document.getElementById('prenom1');
let nom1 = document.getElementById('nom1');
let tel1 = document.getElementById('tele1');
let Email = document.getElementById('email');
let erreur = document.getElementById('erreur');
let erreur3 = document.getElementById('erreur2');
let erreur2 = document.getElementById('erreur1');
let err = document.getElementById('err');
let er = document.getElementById('er');
let age = document.getElementById('age1');
let permis = document.getElementById('permis');
let id=document.getElementById("id")

tel.onkeyup = function () {
    if (isNaN(tel.value) || tel.value.length > 10 || Number(tel.value) <= 0) {
        erreur.removeAttribute('hidden');
    } else {
        erreur.setAttribute('hidden', '');
    }
}


age.onkeyup = function () {
    if (isNaN(age.value) || age.value.length > 10 || Number(age.value) <= 0) {
        err.removeAttribute('hidden');
    } else {
        err.setAttribute('hidden', '');
    }
}
let Pert=[]

function add() {
    if (mdp1.value == '' || login1.value == '' || nom.value == '' || prenom.value == '' || tel.value == '' || Email.value == '') {
        alert("tous les champs sont obligatoir");
    }
}

function add1() {
    if (nom1.value == '' || prenom1.value == '' || tel1.value == '' || age.value=='') {
        alert("tous les champs sont obligatoir");
    }
}

function add2() {
    if (nom1.value == '' || prenom1.value == '' || tel1.value == '' || age.value=='' || permis.value=='') {
        alert("tous les champs sont obligatoir");
    }
}

//Fonction Supprimer Ligne
function Supprimer(Position) {
    if (confirm("Voulez-Vous Vraimaent Supprimer Cette Ligne?") == true) {
        setTimeout(() => {
            tabPersonnes.splice(Position, 1);
            PersonneTableau();
        }, 200);
    }
}

