<?php
require "Mammal.php";

final class Dog extends Mammal
{
    protected string $breed;

    // constructeur
    public function __construct(string $name, int $age, string $furColor, float $breed)
    {
        parent::__construct($name, $age, $furColor);
        $this->setbreed($breed);
    }
    //fonctions abstract
    function makeSound(): string
    { return "bouuuh";}

    function move(): string{
        return "move";
    }

    //méthodes :
    final function bark(): string{
        return "wouf";
    }

    // getters et setters
    public function getbreed(): float
    {
        return $this->breed;
    }

    public function setbreed(float $breed): void
    {
        $this->breed = $breed;
    }
}
