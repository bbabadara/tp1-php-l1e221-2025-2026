<?php
$contacts = [
    "Ali" => "770000001",
    "Fatou" => "770000002",
    "Moussa" => "770000003"
];

// Afficher le numéro de Fatou.
echo "Le numero de Fatou est : ".$contacts['Fatou'];
echo "<br>";echo "<br>";
// Ajouter un nouveau contact.
$contacts["Awa"]="771234567";
// Parcourir et afficher tous les contacts.

foreach ($contacts as $key => $value) {
    echo "$key : $value"."<br>";
}