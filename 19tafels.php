<!DOCTYPE html>

<?php
$tafel = readline("Vul hier de tafel in ");
$Begin = readline("Vul hier de begin van de tafel in ");
$einde = readline("Vul hier het einde van de tafel in ");
for ($x = $Begin; $x <= $einde; $x++)
    echo $x * $tafel . "\n";

$herhalen = readline("Wilt u nog een tafel weten");
if ($herhalen == " nee")  echo "oke een fijne dag nog.\n";
else ($herhalen == " ja");
$tafel = readline("Vul hier de tafel in ") . "\n";
$Begin = readline("Vul hier de begin van de tafel in ");
$einde = readline("Vul hier het einde van de tafel in ");
for ($x = $Begin; $x <= $einde; $x++)
    echo  $x * $tafel . "\n";
