<?php
class MyAttribute
{
    private $attribute;

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }

    public function display()
    {
        echo $this->attribute . PHP_EOL;
    }
}
$new_attrib = new MyAttribute("coucou c'est moi");
$new_attrib ->display();