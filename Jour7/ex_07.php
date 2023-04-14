<?php
function str_to_wordtab(string $str, string $delim): ?array
{
    if (!is_string($str) || !is_string($delim)) {
        return null;
    }
    $result = array();
    $words = explode($delim, $str);
    foreach ($words as $word) {
        $trimmed_word = trim($word);
        if ($trimmed_word !== '') {
            $result[] = $trimmed_word;
        }
    }
    return $result;
}
