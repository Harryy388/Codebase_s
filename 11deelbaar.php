<?php
$deeltal = readline("Geef de deeltal: ");
$deler = readline("Geef de deler: ");

$antwoord = $deeltal/$deler;
if ($antwoord < 1) {
    echo $antwoord;
    echo " De deler past niet in de deeltal ";
} else {
    echo $antwoord;
}
