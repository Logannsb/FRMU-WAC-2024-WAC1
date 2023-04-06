<?php
function my_aff_global()
{
    global $a;
    foreach ($GLOBALS as $key => $value) {
        if (gettype($GLOBALS[$key]) == 'string') {
            echo $key . " => " . $value . "\n";
        }
    }
}
