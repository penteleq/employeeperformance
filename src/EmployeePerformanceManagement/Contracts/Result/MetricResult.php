<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 14:05
 */

namespace EmployeePerformanceManagement\Contracts\Result;

interface MetricResult
{
    /**
     * Numeric or textual reached score value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore();

    /**
     * An indicator as to whether a rating, score, or appraisal was a satisfactory or "passing" result.
     * @return bool
     */
    public function getPassedIndicator();
}