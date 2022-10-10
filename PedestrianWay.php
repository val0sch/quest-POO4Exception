<?php
require_once 'HighWay.php';


final class PedestrianWay extends HighWay
{
    public function addVehicle($vehicle)
    {
        if ($vehicle === "bike" || $vehicle === "skateboard") {
            $this->setCurrentVehicles($vehicle);
        } else {
            echo "Bike and Skateboard Only! <br>";
        }
    }
}
