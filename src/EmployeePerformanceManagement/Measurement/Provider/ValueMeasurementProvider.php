<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 20:33
 */

namespace EmployeePerformanceManagement\Measurement\Provider;


use EmployeePerformanceManagement\Contracts\Measureable;
use EmployeePerformanceManagement\Contracts\MeasurementProvider;

class ValueMeasurementProvider implements MeasurementProvider
{
    private $measure;

    /**
     * ValueMeasurementProvider constructor.
     * @param Measureable $measure
     */
    public function __construct(Measureable $measure)
    {
        $this->measure = $measure;
    }

    /**
     * Returns computed value of measureable
     * @return float
     */
    public function execute()
    {
        return $this->measure->getValue();
    }
}