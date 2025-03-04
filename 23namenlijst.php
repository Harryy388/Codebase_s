<?php
$namenlijst = readline("Vul de namen met spaties ertussen in ");
$namen = explode (" ", $namenlijst);
foreach ($namen as $patat) {
    echo $patat . "\n";
}

