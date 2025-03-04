<?php
$user1 = readline("Hoeveel punten heeft speler 1? ");
$user2 = readline("Hoeveel punten heeft speler 2? ");


if ($user1 > $user2) {
    echo "Speler 1 heeft gewonnen";
} else if ($user1 < $user2) {
    echo "Speler 2 Heeft gewonnen";
}
