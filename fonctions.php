<?php
function conx(){
    //se connecter au base donné tsig_g1
    $host="localhost";
    $user="root";
    $pwd="";
    $dbname="projet";

    try {
    $con = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
    return $con;
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
}

