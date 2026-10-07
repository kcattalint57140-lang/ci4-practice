<?php

namespace App\Libraries\Practice2;

class Employee
{
    protected string $name;
    protected float $baseSalary;

    public function __construct(string $name, float $baseSalary)
    {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function calculateSalary(): float
    {
        return $this->baseSalary;
    }
}