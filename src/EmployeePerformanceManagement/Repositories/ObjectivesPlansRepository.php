<?php

namespace EmployeePerformanceManagement\Repositories;

class ObjectivesPlansRepository extends DocumentsRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return 'EmployeePerformanceManagement\Models\ObjectivesPlan';
    }
}