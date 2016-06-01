<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 17:11
 */

namespace EmployeePerformanceManagement\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use EmployeePerformanceManagement\Contracts\Measureable;

class Measure extends Eloquent implements Measureable
{
    protected $table = 'epm_measures';

    /**
     * Measure weight
     * @return int
     */
    public function getWeight()
    {
        return $this->attributes['weight'];
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