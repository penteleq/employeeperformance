<?php

namespace EmployeePerformanceManagement\Models;

use EmployeePerformanceManagement\Components\TimePeriod;
use EmployeePerformanceManagement\Contracts\NamedElement;
use EmployeePerformanceManagement\Exceptions\InvalidMeasureValueException;
use EmployeePerformanceManagement\Models\Results\ObjectiveResult;
use EmployeePerformanceManagement\Traits\CompoundMeasureTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;
use EmployeePerformanceManagement\Contracts\Objective as ObjectiveInterface;


class Objective extends Eloquent implements ObjectiveInterface, NamedElement
{
    use CompoundMeasureTrait;

    protected $table = 'epm_objectives';

    const MEASUREABLE = 'measureable';
    const NOT_MEASUREABLE = 'not_measureable';

    /**
     * Objective constructor.
     * @param array $value
     * @param $weight
     * @param array $attributes
     */
    public function __construct($value, $weight, $attributes = [])
    {
        $this->value = $value;
        $this->weight = $weight;

        parent::__construct($attributes);
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
        //  TODO: Resolve ObjectiveResult from IoC Container
        $score = (new ObjectiveResult($this))->getScore();

        if ($score->isNumeric())
        {
            return $score->getValue();
        }

        throw new InvalidMeasureValueException;
    }

    public function getObjectiveStatus()
    {
        return $this->attributes['status'];
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function getObjectiveType()
    {
        return $this->attributes['type'];
    }

    /**
     * Relation definition
     * @return \EmployeePerformanceManagement\Models\Metric
     */
    public function metrics()
    {
        // TODO: MetricableTrait
        // Morph this
        return new Metric; // $this->hasOne('EmployeePerformanceManagement\Models\Metric', 'id');
    }

    /**
     * Time period for objective's effect
     * @return \EmployeePerformanceManagement\Components\TimePeriod
     */
    public function getTimePeriod()
    {
        return new TimePeriod($this->attributes['start_date'], $this->attributes['end_date']);
    }
}