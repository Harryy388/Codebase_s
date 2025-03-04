<?php
$progammeertalen = ["PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"];
$progammeertalen[] = "Phyton,";
$progammeertalen[] = "Swift,";

sort($progammeertalen);


$aantaltalen = count($progammeertalen);

echo "Gesoorteerde aantaltalen:\n";
foreach ($progammeertalen as $taal) {
    echo $taal . "\n";
}
echo "Aantal programmeertalen: " . $aantaltalen . "\n";
