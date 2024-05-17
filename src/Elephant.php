<?php
require "Mammal.php";

abstract class Elephant extends Mammal
{
    protected float $tuskLength;

    // constructeur
    public function __construct(string $name, int $age, string $furColor, float $tuskLength)
    {
        parent::__construct($name, $age, $furColor);
        $this->setTuskLength($tuskLength);
    }

    //méthodes :
    abstract function trumpet():string;

    // getters et setters
    public function getTuskLength(): float
    {
        return $this->tuskLength;
    }

    public function setTuskLength(float $tuskLength): void
    {
        $this->tuskLength = $tuskLength;
    }
}
?>

