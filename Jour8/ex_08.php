<?php
function get_median(array $vals)
{
    $count = count($vals);
    sort($vals);

    if ($count % 2 == 0) {
        $mid = $count / 2;
        return ($vals[$mid - 1] + $vals[$mid]) / 2;
    } else {
        $mid = floor($count / 2);
        return $vals[$mid];
    }
}
