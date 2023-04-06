<?php
function print_age(int $age)
{
    if ($age == 42) {
        echo "the answer.\n";
    } elseif ($age > 0) {
        echo "je peux aller en boite\n";
    } else
        echo "Enfantillage...\n";
}
//echo print_age(0);