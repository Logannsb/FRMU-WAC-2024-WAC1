<?php

function get_execution_time()
{
    $start_script_timer = microtime(true);
    $buffer = 1;
    for ($i = 1; $i <= 1000; $i++) {
        $buffer++;
    }
    $end_script_timer = microtime(true);
    $result_time = ($end_script_timer - $start_script_timer);
    return round($result_time, 7);
}
