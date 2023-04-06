<?php
function print_status(int $age)
{
    if ($age < 18) echo "Site interdit aux mineurs.\n";
    else echo "Vous pouvez entrer !\n";
}
//echo print_status(19);
