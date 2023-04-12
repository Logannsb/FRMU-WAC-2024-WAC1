<?php
function my_sort_files(array &$tab)
{
    sort($tab);
    foreach ($tab as $value) {
        echo $value . PHP_EOL;
    }
}
