<?php
function check_email()
{
    if (isset($_POST['email'])) {
        $email = trim($_POST['email']); // Supprime les espaces et tabulations en début et fin de chaîne
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Vérifie si l'email est valide
            echo "courriel valide\n";
        } else {
            echo "courriel invalide\n";
        }
    }
}
