<?php
echo "De tickets zijn 12 euro, vul je leeftijd in om te zien of je korting hebt zie je niks dan heb je geen korting ";
$leeftijd = readline("");

if ( $leeftijd < 3) {
    echo "Onder 3 is het gratis omdat je dan een baby bent ";
}else
//$kinderen = [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
if ($leeftijd >= 3 && $leeftijd <=16) {
    echo "Jij moet 6 euro betalen omdat kinderen 50% korting krijgen ";
}else
if ( $leeftijd > 64) {
    echo "Jij moet 9 euro betalen omdat ouderen boven vanaf 65 25% korting krijgen ";
}
else
    echo "12 euro betalen";
