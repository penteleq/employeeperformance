<?php

namespace EmployeePerformanceManagement\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use EmployeePerformanceManagement\Contracts\ObjectivesPlan;
use EmployeePerformanceManagement\Components\TimePeriod;

/**
 * Class BusinessStructure\EmployeesRepository
 * @package Inspeo\Repositories
 */
class ObjectivesRepository extends Repository implements ObjectivesRepositoryInterface
{
    /**
     * @return string
     */
    public function model()
    {
        return 'Inspeo\BusinessStructure\Employee';
    }

    public function withinPeriod(TimePeriod $period)
    {
        // TODO: Implement withinPeriod() method.
    }

    public function byPlan(ObjectivesPlan $plan)
    {
        // TODO: Implement byPlan() method.
    }
}