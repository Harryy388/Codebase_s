<?php

$email = readline("Wat is je email : ");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    list($username) = explode('@', $email);
    echo "De gebruikersnaam is: " . $username;
} else {
    echo "Wel een echte email adres he viezerik" . "\n";
}
