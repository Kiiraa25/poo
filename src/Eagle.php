<?php
require "Bird.php";

abstract class Eagle extends Bird
{
    protected float $flightSpeed;

    //constructeur
    public function __construct(string $name, int $age, float $wingSpan, string $flightSpeed)
    {
        parent::__construct($name, $age, $wingSpan);
        $this->setFlightSpeed($flightSpeed);
    }

    //méthodes :
    abstract function hunt(): string;

    // getters et setters
    public function getFlightSpeed(): string
    {
        return $this->flightSpeed;
    }

    public function setFlightSpeed(string $flightSpeed): void
    {
        $this->flightSpeed = $flightSpeed;
    }
}
