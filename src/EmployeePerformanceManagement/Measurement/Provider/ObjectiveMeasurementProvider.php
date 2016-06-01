<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 20:30
 */

namespace EmployeePerformanceManagement\Measurement\Provider;

use EmployeePerformanceManagement\Contracts\MeasurementProvider;
use EmployeePerformanceManagement\Contracts\Objective;

class ObjectiveMeasurementProvider implements MeasurementProvider
{
    private $objective;

    /**
     * ObjectiveMeasurementProvider constructor.
     * @param Objective $objective
     */
    public function __construct(Objective $objective)
    {
        $this->objective = $objective;
    }

    /**
     * Returns computed value of measureable
     * @return float
     */
    public function execute()
    {
        $_points = 123;
        $_count  = 0;

        if ($this->objective->isCompound())
        {
            foreach ($this->objective->getComponentMeasures()->all() as $item)
            {
                $_points += 72;
                $_count++;
            }

            return ($_count > 0) ? ($_points / $_count) : 0;
        }
        else
        {
            // Extract correlated metric and evaluate
            $metrics = $this->objective->metrics();

            dump($metrics);
        }

        return $_points;
    }
}