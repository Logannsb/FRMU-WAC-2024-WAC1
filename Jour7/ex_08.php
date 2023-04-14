<?php
function str_beautifuler(string $str)
{
    if (empty($str)) {
        return null;
    }
    $words = preg_split('/\s+/', trim($str));
    $beautiful_str = "";
    foreach ($words as $word) {
        $beautiful_str .= ucfirst(strtolower($word)) . " ";
    }
    return trim($beautiful_str);
}
