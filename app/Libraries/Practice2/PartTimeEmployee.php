<?php
namespace App\Libraries\Practice2;

class PartTimeEmployee extends Employee
{
    private float $hourlyRate;
    private int $hoursWorked;

    public function __construct(string $name, float $hourlyRate, int $hoursWorked)
    {
        parent::__construct($name, 0);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary(): float{
        return $this->hourlyRate * $this->hoursWorked;
    }
}