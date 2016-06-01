<?php

namespace EmployeePerformanceManagement\Handlers;

use EmployeePerformanceManagement\Contracts\Measureable;
use EmployeePerformanceManagement\Contracts\BasicDocument;
use EmployeePerformanceManagement\Models\ObjectivesPlan;
use EmployeePerformanceManagement\Components\TimePeriod;
use EmployeePerformanceManagement\Repositories\ObjectivesRepositoryInterface;

class ObjectivesPlanManager
{
    public function addObjective(ObjectivesPlan $plan, Measureable $objective)
    {

    }

    public function removeObjective(ObjectivesPlan $plan, Measureable $objective)
    {

    }

    public function addCollectiveObjective(Measureable $objective, TimePeriod $period, array $subjects)
    {
        foreach ($subjects as $_subject)
        {
            $plan = ObjectivesPlan::where('subject_id', '=', $_subject)->findOrNew();



            dd($plan);
        }
    }

    public function removeCollectiveObjective(Measureable $objective, TimePeriod $period, array $subjects)
    {

    }
}