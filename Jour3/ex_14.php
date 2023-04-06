<?php
function say_my_name(&$string){
    $string .='[name]';
}
$str = 'My name is';
say_my_name($str);
?>