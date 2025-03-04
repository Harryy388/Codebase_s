<?php
$begin = readline("vul hier de begin getal in ");
$einde = readline("Vul hier het eind getal in ");
$antwoord = $einde - $begin;
echo "Het verschil is $antwoord" . "\n";
echo "Hier onder worden $antwoord punten weergaven \n";
for ($x = 0; $x < $antwoord; $x++) {
    echo ".";
}
