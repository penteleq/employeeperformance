<?php

namespace EmployeePerformanceManagement\Models;

use EmployeePerformanceManagement\Components\Score;
use EmployeePerformanceManagement\Models\Common\BaseMeasure;
use EmployeePerformanceManagement\Contracts\InvalidMeasureValueException;
use EmployeePerformanceManagement\Contracts\Measureable;
use EmployeePerformanceManagement\Contracts\Metric as MetricInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Metric Entity for measurement
 *
 * OED: metric, n. A system or standard of measurement; a criterion or set of criteria stated in quantifiable terms.
 * A metric can be expressed as a numeric value adhering to a particular scheme (a "Score") or as text.
 * A metric is a "target" for a business or learning objective.
 *
 * @package EmployeePerformanceManagement\Components
 */
class Metric extends Eloquent implements Measureable, MetricInterface
{
    protected $table = 'epm_metrics';

    /**
     * @return string
     */
    public function getName()
    {
        return 'Reach the sales in January';
    }

    /**
     * @return string
     */
    public function getObjectiveActionCode()
    {
        return 'reach';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'We all should strive for sales objectives!';
    }

    public function getScore()
    {
        return new Score($this->attributes['value']);
    }

    /**
     * Measureable weight
     * @return int
     */
    public function getWeight()
    {
        // TODO: Implement getWeight() method.
    }

    /**
     * Measureable value after any points computing with given measurement methods
     * @return float
     * @throws InvalidMeasureValueException
     */
    public function getValue()
    {
        // TODO: Implement getValue() method.
    }
}