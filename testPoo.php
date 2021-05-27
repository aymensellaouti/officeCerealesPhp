<?php
require_once 'classes/Voiture.php';
echo "Actuellement il y a ".Voiture::getNombreDeVoiture()." voitures<br>";
$fiesta = new Voiture('Fiesta', 'verte', 50);
echo "Actuellement il y a ".Voiture::getNombreDeVoiture()." voitures<br>";
$fiesta2 = new Voiture('Fiesta', 'verte', 50);
echo "Actuellement il y a ".Voiture::getNombreDeVoiture()." voitures<br>";

