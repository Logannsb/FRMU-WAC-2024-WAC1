<?php
function sum_it(int $nbr, int $iteration)
{
    if (!is_int($nbr) || !is_int($iteration)) {
        return NULL;
    }
    $result = $nbr;
    $abs_iteration = abs($iteration);
    for ($i = 0; $i < $abs_iteration; $i++) {
        if ($iteration > 0) {
            $result += ($nbr + $i + 1);
        } else {
            $result += ($nbr - $i - 1);
        }
    }
    return $result;
}
