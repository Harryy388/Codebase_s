<?php
$begin = readline("met welk getal wil je beginnen ");
$einde = readline("Hoeveel stappen wil je nemen ");

for ($x = $begin; $x <= $einde; $x = $x + 10) {
    echo $x  . "\n";
}
