<?php
function my_rounds(float $nb): void
{
    $round1 = round($nb);
    $round2 = ceil($nb);
    $round3 = floor($nb);
    echo "Results : [$round1] - [$round2] - [$round3]\n";
}
//echo my_rounds(2.4); 
//echo my_rounds(-3.8); 
