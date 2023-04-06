<?php

function aff_array(array $my_array){
    foreach ($my_array as $value){
        print ("$value\n");
    }
    $count_element = count($my_array);
    return $count_element;
}

?>