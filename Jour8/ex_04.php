<?php
function clear_and_replace(string $string, string $word): string
{
    $string = trim($string);
    $pos = strpos($string, $word);
    if ($pos !== false) {
        $string = substr_replace($string, 'Pangolin', $pos, strlen($word));
        $pos = strpos($string, $word, $pos + 1);
        if ($pos !== false) {
            $string = substr_replace($string, 'Pangolin', $pos, strlen($word));
        }
    }
    return $string;
}
echo clear_and_replace("  word  word wordword ", "word");
echo clear_and_replace("test", "word");
