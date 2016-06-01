<?php

namespace EmployeePerformanceManagement\Contracts;

interface Objective extends CompoundMeasureable
{
    /**
     * Type
     * @return string
     */
    public function getObjectiveType();

    /**
     * Get status of objective
     * @return int
     */
    public function getObjectiveStatus();

    /**
     * Time period for objective's effect
     * @return \EmployeePerformanceManagement\Components\TimePeriod
     */
    public function getTimePeriod();

    /**
     * Objective use Metrics as evaluation criteria
     * @return \EmployeePerformanceManagement\Contracts\Metric
     */
    public function metrics();
}