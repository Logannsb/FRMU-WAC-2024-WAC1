<?php
function get_angry_bird(int $nbr) {
    $out = '';
    for ($i = 1; $i <= $nbr; $i++) {
        $out .= 'piou';
    }
    $out .= "\n";
    return $out;
}
//echo get_angry_bird(3400);
?>