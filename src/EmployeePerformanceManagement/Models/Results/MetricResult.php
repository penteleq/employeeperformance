<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 14:06
 */

namespace EmployeePerformanceManagement\Models\Results;

use EmployeePerformanceManagement\Components\Score;
use EmployeePerformanceManagement\Contracts\Metric;
use EmployeePerformanceManagement\Contracts\PerformanceResult;
use EmployeePerformanceManagement\Contracts\Result\MetricResult as MetricResultInterface;

class MetricResult implements MetricResultInterface
{
    /**
     * Computed value
     * @var Score
     */
    private $score;

    /**
     * @var Metric
     */
    private $metric;

    /**
     * Constructor
     *
     * @param Metric $metric
     * @param Score $score
     */
    public function __construct(Metric $metric, Score $score)
    {
        $this->score = $score;
        $this->metric = $metric;
    }

    public function getName()
    {
        return $this->metric->getName();
    }

    /**
     * Numeric or textual reached score value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * An indicator as to whether a rating, score, or appraisal was a satisfactory or "passing" result.
     * @return bool
     */
    public function getPassedIndicator()
    {
        switch($this->metric->getObjectiveActionCode())
        {
            case 'reach':

                if ($this->getScore()->getValue() >= $this->metric->getScore()->getValue())
                {
                    return true;
                }

                break;

            default:

                break;
        }

        return false;
    }
}