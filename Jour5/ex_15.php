<?php
function convert_number(int $nbr)
{
    if ($nbr < 1000) {
        $digits = str_split((string)$nbr);
        foreach ($digits as $value) {
            echo IntlChar::chr($value) . " ";
        }
    } else {
        echo "Vive les Pangolins";
    }
}
