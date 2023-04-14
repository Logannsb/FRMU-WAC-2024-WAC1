<?php
function is_prime(int $nbr = null): ?bool
{
    if (!isset($nbr)) {
        return null;
    }
    if (!is_int($nbr)) {
        return null;
    }
    if ($nbr < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nbr); $i++) {
        if ($nbr % $i == 0) {
            return false;
        }
    }
    return true;
}
echo is_prime(3);