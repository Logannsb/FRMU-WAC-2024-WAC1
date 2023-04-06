<?php
function my_increment(int &$nb)
{
  $nb++;
}

function &get_nb()
{
  $a = 5;
  return $a;
}

$nb = &get_nb();
my_increment($nb);
echo $nb;
?>