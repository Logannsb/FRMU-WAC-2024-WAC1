<?php
function write_into_my_file(string $str, string $file, bool $append = false): bool
{
    $flag = $append ? FILE_APPEND : 0;
    $result = file_put_contents($file, $str, $flag);
    return ($result !== false);
}
