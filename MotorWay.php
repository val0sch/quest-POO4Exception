<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if ($vehicle === "bike" || $vehicle === "skateboard") {
            echo "Bike and Skateboard are not allowed on motorway! <br>";
        } else {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
