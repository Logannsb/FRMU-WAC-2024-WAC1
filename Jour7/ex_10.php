<?php
function get_next_prime($nbr)
{
    if (!is_int($nbr)) {
        return null;
    }
    if ($nbr < 2) {
        return 2;
    }
    $i = $nbr;
    while (true) {
        $i++;
        $is_prime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            return $i;
        }
    }
}
//echo get_next_prime(9);