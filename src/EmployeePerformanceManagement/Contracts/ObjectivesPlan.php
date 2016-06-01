<?php

namespace EmployeePerformanceManagement\Contracts;

interface ObjectivesPlan
{
    public function getObjectives();

    public function getObjectiveGroups();

    /**
     * Get
     * @return \EmployeePerformanceManagement\Components\TimePeriod
     */
    public function getPlanPeriod();

    /**
     * Evaluated employee or organisation unit
     * @return \EmployeePerformanceManagement\Contracts\PlanSubject
     */
    public function getPlanSubject();
}