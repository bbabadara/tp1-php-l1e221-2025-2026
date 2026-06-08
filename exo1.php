<?php
// Créez un tableau contenant les jours de la semaine :
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"];


$jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi"];

// Afficher le premier jour.
echo "Le premier jour est: ".$jours[0];
echo "<br>";echo "<br>";

// Afficher le dernier jour.
$taille=count($jours);

echo "Le dernier jour est: ".$jours[$taille-1];

echo "<br>";echo "<br>";

// Afficher tous les jours avec une boucle.

echo "Les jours de la semaine (avec for) sont: ";
for ($i=0; $i <count($jours) ; $i++) {
    echo $jours[$i].", ";
}

echo "<br>";echo "<br>";

echo "Les jours de la semaine (avec foreach) sont: ";

foreach ($jours as  $jour) {
    echo $jour." ,";
}