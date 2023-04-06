<?php
function my_swap_vars(mixed &$a, mixed &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }
  
?>