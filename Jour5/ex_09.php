<?php
function post_levenshtein_score()
{
    if (!isset($_POST['str_one']) || !isset($_POST['str_two'])) {
        return NULL;
    }

    $str_one = $_POST['str_one'];
    $str_two = $_POST['str_two'];

    $levenshtein_distance = levenshtein($str_one, $str_two);

    return $levenshtein_distance;
}
echo post_levenshtein_score();
