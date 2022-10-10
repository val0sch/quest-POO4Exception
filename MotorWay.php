<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if ($vehicle !== "bike" || $vehicle !== "skateboard") {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
