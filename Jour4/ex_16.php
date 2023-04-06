<?php
function print_double_array(array $my_array)
{
    foreach ($my_array as $row) {
        foreach ($row as $value) {
            echo $value . "\n";
        }
    }
}
