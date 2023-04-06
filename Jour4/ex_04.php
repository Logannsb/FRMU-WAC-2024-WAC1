<?php
function print_until(int $max)
{
    $ze = 0;
    if ($max < 0) {
        print "Boulet !\n";
        return false;
    } else {
        print("$ze\n");
        while ($max > $ze) {
            $ze++;
            print("$ze\n");
        }
        return true;
    }
}
//echo print_until(2);