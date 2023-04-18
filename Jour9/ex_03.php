<?php
class MyAttribute
{
    private string $a;
    private string $b;

    public function __construct(string $a, string $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setA(string $a)
    {
        $this->a = $a;
    }

    public function setB(string $b)
    {
        $this->b = $b;
    }

    public function display()
    {
        echo $this->a . " " . $this->b . PHP_EOL;
    }
}
