<?php
require_once './classes/ConnexionBD.php';
$bdd = ConnexionBD::getInstance();
if (!$bdd) {
   echo 'Problème de connexion à la base de données';
}