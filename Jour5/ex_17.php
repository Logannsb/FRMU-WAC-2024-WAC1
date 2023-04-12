<?php
function check_url($whiteList)
{
    if (isset($_GET["token"])) {
        $split = str_split($_GET["token"]);
        $length = strlen($_GET["token"]);
        foreach ($split as $tokenValue) {
            print "--tokenValue char: " . $tokenValue;

            foreach ($whiteList as $listChar) {
                print " compared to listChar char: " . $listChar . PHP_EOL;
                if ($tokenValue == $listChar) {
                    print " -- matches" . PHP_EOL;
                    $length--;
                }
            }
        }
        if ($length == 0) {
            return 1;
        } else {
            return -1;
        }
    } else {
        return false;
    }
}
