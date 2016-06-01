<?php

namespace EmployeePerformanceManagement\Contracts;

interface Measureable
{
    /**
     * Measureable weight
     * @return int
     */
    public function getWeight();

    /**
     * Measureable value after any points computing with given measurement methods
     * @return float
     * @throws InvalidMeasureValueException
     */
    public function getValue();
}