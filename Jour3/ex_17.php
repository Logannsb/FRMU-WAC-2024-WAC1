<?php
function array_key($array, $key)
{
    if (array_key_exists($key, $array)) {
        return $array[$key];
    } else {
        return null;
    }
}
