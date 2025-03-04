<?php

$fruits = [];

$fruits[0] = "Aardbei";
$fruits[1] = "Appel";

for ($i = 0; $i < count($fruits); $i++) {
    Echo $i . ": " . $fruits[$i] ." ";
}

$fruits[1] = "kiwi";

Echo "opdracht 2: " . $fruits[1];

