<?php
class MyDisplay
{
    public function display()
    {
        echo "Hello World !" . PHP_EOL;
    }
}
$new_display = new MyDisplay();
$new_display->display();