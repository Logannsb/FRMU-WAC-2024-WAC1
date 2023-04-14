<?php
function count_char(string $str): array
{
    $char_count = array();
    foreach (str_split($str) as $char) {
        if ($char != ' ' && $char != '\t') {
            if (isset($char_count[$char])) {
                $char_count[$char]++;
            } else {
                $char_count[$char] = 1;
            }
        }
    }
    ksort($char_count);
    return $char_count;
}

print_r(count_char("hello world"));
