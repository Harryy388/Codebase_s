<?php
$leeftijd = readline("Hoe oud ben je? ");
if ($leeftijd < 10) {
    echo "Je bent te jong";
}
if ($leeftijd > 118) {
    echo "Je bent te oud";
}
$gefeliciteerd = [10, 16, 18, 50, 67, 100];

if (in_array($leeftijd, $gefeliciteerd)) {
    echo "Gefeliciteerd ";
} //Als 2 variabelen in if zet moet je in_array gebruiken


if ($leeftijd == 62) {
    echo "U heeft nog 5 jaar voor u 67 jaar oud word";
}
