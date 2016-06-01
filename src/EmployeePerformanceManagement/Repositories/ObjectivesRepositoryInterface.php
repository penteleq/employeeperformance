<?php

namespace EmployeePerformanceManagement\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use EmployeePerformanceManagement\Contracts\ObjectivesPlan;
use EmployeePerformanceManagement\Components\TimePeriod;

interface ObjectivesRepositoryInterface extends RepositoryInterface
{
    public function withinPeriod(TimePeriod $period);
    public function byPlan(ObjectivesPlan $plan);
}

