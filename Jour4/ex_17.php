<?php
function get_array_key(array $arr, $value)
{
    foreach ($arr as $key => $element) {
        if ($element === $value) {
            return $key;
        }
    }
    return false;
}
