<?php
function str_lower_epur(string $str): ?string
{
    // Vérifier que la chaîne n'est pas vide
    if (empty($str)) {
        return null;
    }

    $str = ucwords(strtolower(trim(preg_replace('/\s+/', ' ', $str))));

    $words = explode(' ', $str);
    foreach ($words as &$word) {
        $word = rtrim($word, ',.') . ucfirst(substr($word, -1));
    }

    $str = implode(' ', $words);

    return $str;
}
//echo str_lower_epur("  JE .VEUX ,modifier, MES chaines ! DE character  ");
//echo str_lower_epur("");
