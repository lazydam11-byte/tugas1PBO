<?php

interface Fuelable
{
    public function refuel(): void;
}

trait DefaultRefuel
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum.\n";
    }
}
