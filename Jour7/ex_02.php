<?php
function my_facto(int $nbr)
{
    if (!is_int($nbr) || $nbr < 0) {
        return NULL; 
    }
    if ($nbr <= 1) {
        return 1; 
    }
    return $nbr * my_facto($nbr - 1);
}
echo my_facto(7);