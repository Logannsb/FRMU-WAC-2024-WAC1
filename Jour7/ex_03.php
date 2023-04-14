<?php
function my_pow(int $nb_a, int $nb_b)
{
    if (!is_int($nb_a) || !is_int($nb_b)) {
        return NULL;
    }
    if ($nb_b < 0) {
        return NULL; 
    }
    $result = 1;
    for ($i = 0; $i < $nb_b; $i++) {
        $result *= $nb_a;
    }
    return $result;
}
//echo my_pow(5, 1);