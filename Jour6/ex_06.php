<?php
function my_comb_n(int $n)
{
    if ($n == 0) {
        echo "0\n";
        return;
    }

    $digits = range(1, 9);
    $combinations = array();

    $combinations = generate_combinations($digits, $n);

    sort($combinations);

    foreach ($combinations as $combination) {
        echo $combination . "\n";
    }
}

function generate_combinations($digits, $n, $prefix = '')
{
    $combinations = array();

    if ($n == 0) {
        array_push($combinations, $prefix);
        return $combinations;
    }

    foreach ($digits as $digit) {
        $new_prefix = $prefix . $digit;
        $new_digits = array_diff($digits, array($digit));
        $sub_combinations = generate_combinations($new_digits, $n - 1, $new_prefix);
        $combinations = array_merge($combinations, $sub_combinations);
    }

    return $combinations;
}
//echo my_comb_n(1);