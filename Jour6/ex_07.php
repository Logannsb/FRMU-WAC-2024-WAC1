<?php
function my_sort_int_tab(array &$tab)
{
    $temp_arr = [];
    $ind = -1;
    $is_arr_basic = true;
    foreach ($tab as $key => $value) {
        $ind++;
        $temp_arr[$ind] = [$value, $key];
        if (!is_numeric($key))
            $is_arr_basic = false;
    }
    for ($i = 0; $i < $ind; $i++) {
        if ($temp_arr[$i][0] > $temp_arr[$i + 1][0]) {
            $temp = $temp_arr[$i];
            $temp_arr[$i] = $temp_arr[$i + 1];
            $temp_arr[$i + 1] = $temp;
            if ($i != 0)
                $i -= 2;
        }
    }
    $final_arr = [];
    for ($i = 0; $i <= $ind; $i++) {
        if ($is_arr_basic) {
            $final_arr[$i] = $temp_arr[$i][0];
        } else {
            $final_arr[$temp_arr[$i][1]] = $temp_arr[$i][0];
        }
    }
    $tab = $final_arr;
}
$test = [3, 5, 9, 7, 6, 2, 4];
$test2 = ["a" => 3, "b" => 5, "c" => 9, "d" => 7, "e" => 6, "f" => 2, "g" => 4];
my_sort_int_tab($test);
print_r($test);
my_sort_int_tab($test2);
print_r($test2);
