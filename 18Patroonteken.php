<?php
$stapel = readline("hoe hoog wil je de pyramide : ");
for ($x = 0; $x <= $stapel; $x++) {
    echo "*" . "\n";

    for ($xx = 0; $xx <= $x; $xx++) {
        echo "*";
    }
}
echo "*";
