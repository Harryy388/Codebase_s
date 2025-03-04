<?php

$rugzak = [];
$rugzak[0] = "Eten en drinken ";
$rugzak[1] = "Compas ";
$rugzak[2] = "Kaart ";
$rugzak[3] = "Slaapzak ";
$rugzak[4] = "Tent ";

array_splice($rugzak,2,1);
$rugzak[0] = "thee ";
sort ($rugzak);
foreach($rugzak as $ahmed) {

    echo $ahmed . "\n";
}

$aantal = count ($rugzak);

echo "er zijn $aantal variabelen";