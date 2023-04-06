<?php
function spupof(string $str)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $resultat = '';

    foreach (str_split($str) as $char) {
        $char = strtolower($char);
        $next_index = strpos($alphabet, $char) + 1;
        $next_char = ($next_index < strlen($alphabet)) ? $alphabet[$next_index] : 'a';
        $resultat .= $next_char;
    }

    echo $resultat . "\n";
}
//echo spupof('azer');