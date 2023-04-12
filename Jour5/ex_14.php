<?php
function display_names(...$params)
{
    $script_name = basename($_SERVER['SCRIPT_NAME']);

    $num_args = count($params);

    $is_even = ($num_args % 2 == 0) ? 1 : 0;

    $result_array = array($script_name, NULL, NULL, $num_args, $is_even);
    return $result_array;
}
