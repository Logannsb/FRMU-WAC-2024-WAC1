<?php

class Character
{
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;
    const CLASSE = "Character";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getAgility()
    {
        return $this->agility;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getMana()
    {
        return $this->mana;
    }
}

class Paladin extends Character
{

    const CLASSE = "Paladin";

    protected $endurance = 100;

    protected $agility = 8;

    protected $strength = 10;

    protected $mana = 3;

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->getName() . ": I'll engrave my name in the history !" . PHP_EOL;
    }

    public function attack()
    {
        echo $this->getName() . ": I'll crush you with my hammer !" . PHP_EOL;
    }

    public function __destruct()
    {
        echo $this->getName() . ": Aarrg I can't believe I'm dead. . . " . PHP_EOL;
    }
}

class Mage extends Character
{

    const CLASSE = "Mage";

    protected $endurance = 70;

    protected $agility = 10;

    protected $strength = 3;

    protected $mana = 10;

    public function __construct($name)
    {
        parent::__construct($name);
        echo $this->getName() . ": May the gods be with me." . PHP_EOL;
    }

    public function attack()
    {
        echo $this->getName() . ": Feel the power of my magic !" . PHP_EOL;
    }

    public function __destruct()
    {
        echo $this->getName() . ": Aarrg I can't believe I'm dead. . . " . PHP_EOL;
    }
}
$mage =new  Mage("Sabertooth");
$mage->attack();
$mage->getName();
$pal =new Paladin("Azounette");
$pal->attack();
$pal->getName();