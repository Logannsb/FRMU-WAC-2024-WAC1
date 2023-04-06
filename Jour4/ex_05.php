<?php

function print_range(int $min)
{
    $ze = $min;
    do {
        print("$ze\n");
        $ze++;
    } while ($ze != 42 + 1 && $min <= 42 + 1);
    return $min == 42;
}
