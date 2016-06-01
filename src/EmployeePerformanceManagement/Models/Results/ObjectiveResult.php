<?php

namespace EmployeePerformanceManagement\Models\Results;

use EmployeePerformanceManagement\Components\MultiRaterScore;
use EmployeePerformanceManagement\Components\ObjectiveStatusCode;
use EmployeePerformanceManagement\Components\RaterScore;
use EmployeePerformanceManagement\Contracts\Collection;
use EmployeePerformanceManagement\Contracts\Objective;
use EmployeePerformanceManagement\Contracts\PerformanceResult;
use EmployeePerformanceManagement\Contracts\Result\ObjectiveResult as ObjectiveResultInterface;
use EmployeePerformanceManagement\Exceptions\InvalidRaterScoreException;
use EmployeePerformanceManagement\Measurement\Provider\MongoObjectivePointsProvider;
use EmployeePerformanceManagement\Measurement\Provider\ObjectiveMeasurementProvider;
use EmployeePerformanceManagement\Measurement\RangeRatingResolver;
use EmployeePerformanceManagement\Misc\ResultProvider;

/**
 * Objective results can include results set against metrics set out in an objective plan as well as ratings with respect to the achievement of objectives.
 * Like objective targets set out in an objective plan, objective results can include ratings/measures on the achievement of sub-objectives that roll-up in
 * to an overall rating or measure for an objective category
 *
 * @package EmployeePerformanceManagement\Results
 */
class ObjectiveResult implements ObjectiveResultInterface, PerformanceResult // CompoundObjectiveResultInterface ?
{
    protected $objective;

    protected $resultProvider;

    /**
     * @var null
     */
    private $_metricResult = null;

    private $measurementProvider;

    /**
     * ObjectiveResult constructor.
     * @param $objective
     */
    public function __construct(Objective $objective) // CompoundObjective ?
    {
        $this->objective = $objective;

        $this->measurementProvider = new ObjectiveMeasurementProvider($this->objective);

        // Configure result provider
        $this->resultProvider = new ResultProvider($this->measurementProvider, $this->getObjectiveRatingResolver());
    }

    protected function getObjectiveRatingResolver()
    {
        /**
         * For particulary objective RatingResolver can be different
         */
        return new RangeRatingResolver();
    }

    /**
     * Extract status from status parameter or ... calculate
     * @return ObjectiveStatusCode
     */
    public function getObjectiveStatusCode()
    {
        return new ObjectiveStatusCode($this->objective->getObjectiveStatus());
    }

    public function getComment()
    {
        // TODO: Implement getComment() method.
    }

    public function getResultAgainstMetric()
    {
        /*
        if ($this->objective->metric())
        {
            // TODO: Resolve MetricResult from IoC Container
            // TODO: From where this score should be provided
            // TODO: Metric is a criteria or set of criteria
            $this->_metricResult = new MetricResult($this->objective->metric(), $this->resultProvider->getScore());
        }
        */

        return $this->_metricResult;
    }

    /**
     * Numeric or textual result value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore()
    {
        return $this->resultProvider->getScore();
    }

    /**
     * Evaluated rating of given score
     * Common usage with evaluation algorithm
     *
     * @return mixed
     */
    public function getRating()
    {
        return $this->resultProvider->getRating();
    }

    public function getIndividualRaterScore()
    {
        if (true)
        {
            return new RaterScore(1, 12);
        }

        throw new InvalidRaterScoreException("This objective has been rated by multiple raters");
    }

    public function getMultiRaterGroupScore()
    {
        if (true)
        {
            return new MultiRaterScore();
        }

        throw new InvalidRaterScoreException("This objective has been rater by individual rater");
    }
}