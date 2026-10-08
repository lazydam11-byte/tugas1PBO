<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Movable.php';
require_once __DIR__ . '/Fuelable.php';

class Motor extends Vehicle implements Fuelable, Movable
{
    use DefaultRefuel;

    public function move(): void
    {
        echo "{$this->name} bergerak di tanah gravel.\n";
    }
}
