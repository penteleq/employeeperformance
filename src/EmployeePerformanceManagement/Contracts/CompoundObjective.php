<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 02:00
 */

namespace EmployeePerformanceManagement\Contracts;

interface CompoundObjective extends Objective
{
    public function isCompound();

    public function getComponentMeasures();
}