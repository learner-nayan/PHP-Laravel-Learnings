<?php
class Animal{
    public $tail;
    public $legs;
    public $sound;

    public function __construct($tail, $legs, $sound) {
        $this->tail = $tail;
        $this->legs = $legs;
        $this->sound = $sound;
    }

    public function getSound()
    {
        return $this->sound;
    }

}

class Dog extends Animal{
    public $security;

    public function __construct($tail, $legs, $sound, $security) {
        parent::__construct($tail, $legs, $sound);
        $this->security = $security;
    }

    public function givesSecurity()
    {
        return $this->security;
    }
}

$dog = new Dog("One", "Four", "Bark", true);

echo $dog->getSound();
echo $dog->givesSecurity();