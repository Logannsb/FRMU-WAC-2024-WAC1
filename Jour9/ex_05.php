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

$character = new Character("Miguel");
echo $character->getName(); 
echo $character->getEndurance();
echo $character->getAgility(); 
echo $character->getStrength(); 
echo $character->getMana();