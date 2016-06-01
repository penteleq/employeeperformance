<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 04.12.2015
 * Time: 11:07
 */

namespace EmployeePerformanceManagement\Contracts;

interface MeasurementProvider
{
    /**
     * Returns computed value of measureable
     * @return float
     */
    public function execute();
}