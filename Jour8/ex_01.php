<?php
function which_is_longer($str1, $str2)
{
    if (!is_string($str1) || !is_string($str2)) {
        return -1;
    }
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 > $len2) {
        return $len1;
    } elseif ($len2 > $len1) {
        return $len2;
    } else {
        return $len1;
    }
}
//echo which_is_longer("sal","salut");
//echo which_is_longer("salute","salut");
//echo which_is_longer("salut","salut");
//echo which_is_longer("sal",2);