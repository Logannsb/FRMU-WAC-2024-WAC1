<?php
function my_generate_file(string $name)
{
    if (!file_exists("$name.txt")) {
        fopen($name . ".txt", "x");
        return true;
    } else {
        return false;
    }
}
