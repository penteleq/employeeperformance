<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 04.12.2015
 * Time: 10:47
 */

namespace EmployeePerformanceManagement\Misc;

use EmployeePerformanceManagement\Contracts\MeasurementProvider;
use EmployeePerformanceManagement\Contracts\PerformanceRatingResolver;
use EmployeePerformanceManagement\Contracts\PerformanceResult;
use EmployeePerformanceManagement\Components\Score;


/**
 * Class ResultProvider
 *
 * Provides functionality to compute and manage result of measures collection
 *
 * @package EmployeePerformanceManagement\Misc
 */
class ResultProvider implements PerformanceResult
{
    /**
     * @var MeasurementProvider
     */
    private $measurementProvider;

    /**
     * @var PerformanceRatingResolver
     */
    private $ratingResolver;

    /**
     * Computed value
     * @var float
     */
    private $points;

    /**
     * Resolved rating
     * @var mixed
     */
    private $rating;

    /**
     * ResultProvider constructor.
     * @param MeasurementProvider $measurementProvider
     * @param PerformanceRatingResolver $ratingResolver
     */
    public function __construct(MeasurementProvider $measurementProvider, PerformanceRatingResolver $ratingResolver = null)
    {
        $this->measurementProvider = $measurementProvider;
        $this->ratingResolver = $ratingResolver;
    }

    protected function compute()
    {
        if ( ! $this->rating)
        {
            $this->points = $this->measurementProvider->execute();

            if ($this->ratingResolver)
            {
                $this->rating = $this->ratingResolver->resolve($this->points);
            }
        }

        return false;
    }

    public function getPoints()
    {
        $this->compute();

        return $this->points;
    }

    /**
     * Numeric or textual result value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore()
    {
        return new Score($this->getPoints());
    }

    /**
     * Evaluated rating of given score
     * Common usage with evaluation algorithm
     *
     * @return string
     */
    public function getRating()
    {
        $this->compute();

        return $this->rating;
    }
}