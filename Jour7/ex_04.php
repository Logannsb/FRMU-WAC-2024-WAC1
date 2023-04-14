<?php
function my_pow_rec(int $nbr, int $power)
{
    if (!is_int($nbr) || !is_int($power)) {

        
        return NULL;
    }
    if ($power < 0) {
        return NULL;
    }
    if ($power == 0) {
        return 1;
    }
    return $nbr * my_pow_rec($nbr, $power - 1);
}
