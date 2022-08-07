<?php

    function Connexion(){
        $host='localhost';
        $user='root';
        $password='';
        $db='projetphp';
        $con=mysqli_connect($host,$user,$password,$db);
        return $con;
    }

    function fermerConnexion($con){
        mysqli_close($con);
    }
