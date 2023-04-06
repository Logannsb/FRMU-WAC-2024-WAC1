<?php
function print_array_with_key(array $my_array)
{
    foreach ($my_array as $key => $value) {
        print("$key : $value\n");
    }
}
