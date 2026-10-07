<?php

namespace App\Libraries\Practice2;

class FullTimeEmployee extends Employee
{
    private float $bonusRate = 0.10;

    public function calculateSalary(): float
    {
        return $this->baseSalary + ($this->baseSalary * $this->bonusRate);
    }
}