<?php
function goto_is_evil()
{
    $i = 0;
    label:
    if ($i < 42) {
        echo "wac\n";
        $i++;
        goto label;
    }
}
//echo goto_is_evil(42);