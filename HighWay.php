<?php


abstract class HighWay
{

    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed =  $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }


    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }



    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract protected function addVehicle($vehicle);
}

// MotorWay (4 voies, 130km/h),
// PedestrianWay (1 voie, 10km/h)et
// ResidentialWay (2 voies, 50km/h).