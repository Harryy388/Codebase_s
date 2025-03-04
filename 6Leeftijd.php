<?php
$leeftijd = readline("Hoe oud ben je");
//hvl jaar Ouder dan 16
$leeftijd16 = ($leeftijd - 16);
//hvl jaarJonger dan 50
$leeftijd50 = (50 - $leeftijd);
//hvl jaar om 67 jaar oud te zijn
$leeftijd67 = (67 - $leeftijd);
//hvl jaar om 100 jaar oud te zijn
$leeftijd100 = (100 - $leeftijd);

echo "Je bent $leeftijd16 jaar ouder dan 16";
echo "\n";
echo "Je bent $leeftijd50 jaar jonger dan 50";
echo "\n";
echo "Je moet nog $leeftijd67 jaar leven om 67 te worden";
echo "\n";
echo "Je moet nog $leeftijd100 jaar leven om 100 te worden";
echo "\n";
