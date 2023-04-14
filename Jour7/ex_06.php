<?php
function sum_rec(int $nbr, int $iteration)
{
    if (!is_int($nbr) || !is_int($iteration)) {
        return NULL;
    }
    if ($iteration == 0) {
        return $nbr;
    }
    if ($iteration > 0) {
        return sum_rec($nbr + 1, $iteration - 1) + $nbr + $iteration;
    } else {
        return sum_rec($nbr - 1, $iteration + 1) + $nbr + $iteration;
    }
}
