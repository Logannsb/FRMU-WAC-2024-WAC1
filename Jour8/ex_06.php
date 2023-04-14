<?php
function str_to_wordtab(string $str, string $delim): ?array
{
    if (!is_string($str) || !is_string($delim)) {
        return null;
    }

    return explode($delim, trim($str));
}


//print_r(str_to_wordtab("Coucou mec", " "));
