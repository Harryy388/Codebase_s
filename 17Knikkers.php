<?php
$knikkers = readline("Hoeveel knikkers begin je mee?");
if ($knikkers >= 11) {
    echo "Dit zijn teveel knikkers";
} else {
    $gooi = readline("Hoeveel knikkers gooi je:");
    $over = $knikkers - $gooi;
    echo "Je hebt $gooi knikkers gegooit";
    echo "\n";
    echo "Je hebt $over Knikkers over ";
}
