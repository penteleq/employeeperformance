<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 01:45
 */

namespace EmployeePerformanceManagement\Contracts;

interface CompoundMeasureable extends Measureable
{
    public function getComponentMeasures();

    public function isCompound();
}