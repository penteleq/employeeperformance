<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 19:40
 */

namespace EmployeePerformanceManagement\Measurement\Provider;

use EmployeePerformanceManagement\Contracts\MeasurementProvider;

class MongoObjectivePointsProvider implements MeasurementProvider
{
    /**
     * Returns computed value of measureable
     * @return float
     */
    public function execute()
    {
        return 92;

//        $computed = $this->measure->getMeasurementComponents()->each(function($measure) {
//
//            if ( ! $measure instanceof Measureable) {
//                throw new \Exception;
//            }
//
//            if ($measure->getWeight() !== null)
//            {
//                $measure->computedScore = ($measure->getWeight() / 100) * $measure->getValue();
//            }
//        });
//
//        $this->points = $computed->average(function($item) {
//            return $item->computedScore;
//        });
    }
}