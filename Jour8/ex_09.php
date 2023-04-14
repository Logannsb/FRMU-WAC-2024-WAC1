<?php
function make_pangolins(array &$my_array): void
{
    foreach ($my_array as &$value) {
        $value = "pangolin";
    }
}
$my_array = [1, 2, 3, 4, 5,6,7,8,9,10,11,12];
make_pangolins($my_array);
print_r($my_array);
