<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    protected string $energy;
    protected int $energyLevel;
    protected bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Enlève le frein à main !!");
        } else {
            $this->currentSpeed = 15;
            return "Go !";
        }
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */
    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     */
    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}
