<?php
function my_facto(int $nbr)
{
    if (!is_int($nbr) || $nbr < 0) {
        return NULL; 
    }
    $result = 1;
    for ($i = 1; $i <= $nbr; $i++) {
        $result *= $i;
    }
    return $result;
}
//echo my_facto(7);