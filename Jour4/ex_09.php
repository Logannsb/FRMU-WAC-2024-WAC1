<?php
function multiples(int $arg)
{
    print("0\n");
    for ($i = 1; $i < 200000; $i++) {
        if (($arg % $i) == 0) {
            print("$i\n");
        }
    }
}
//echo multiples(1024);