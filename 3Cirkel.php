<?php
$diameter = readline("Voeg de diameter in ");
echo "omtrek " . 2 * pi() * ($diameter * 0.5);
echo "\n";

echo "opervlakte : " . (pi() * ($diameter * 0.5) ^ 2);
