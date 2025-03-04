<?php
$dag  = READline("welke dag ben je geboren ");
$maand  = READline("welke maand ben je geboren ");
$jaar  = READline("welke jaar ben je geboren ");

$datum = new datetime();
$dateOfBirth = DateTime::createFromFormat('d/m/Y', "$dag/$maand/$jaar");

if ($dateOfBirth == false) {
    echo "Wel een echte geboortedatum viezerik";
} else {
    $age = $datum->diff($dateOfBirth)->y;
    echo "Deze persoon is: $age jaar oud .\n";
}
