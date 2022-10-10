<?php
require_once "Vehicle.php";

class Truck extends Vehicle
{
    private int $volume;

    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, int $volume, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->volume = $volume;
        $this->loading = $loading;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }
    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getLoading(): string
    {
        if ($this->loading == $this->volume) {
            return "Fully loaded";
        } else {
            return "in filling";
        }
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}
