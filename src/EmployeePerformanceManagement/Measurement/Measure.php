<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 04.12.2015
 * Time: 22:13
 */

// TODO: Move it to the Models
namespace EmployeePerformanceManagement\Measurement;

use EmployeePerformanceManagement\Contracts\Measureable;

/**
 * Common Measure Entity
 * @package EmployeePerformanceManagement\Measurement
 */
class Measure implements Measureable
{
    protected $weight;
    protected $value;

    /**
     * Measure constructor.
     * @param $weight
     * @param $value
     */
    public function __construct($value, $weight = 0)
    {
        $this->weight = $weight;
        $this->value = $value;
    }

    /**
     * Measureable weight
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Measureable value after any points computing with given measurement methods
     * @return float
     * @throws InvalidMeasureValueException
     */
    public function getValue()
    {
        if (is_numeric($this->value))
        {
            return $this->value;
        }

        throw new InvalidMeasureValueException;
    }
}