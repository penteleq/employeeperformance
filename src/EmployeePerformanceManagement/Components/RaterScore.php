<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 21:43
 */

namespace EmployeePerformanceManagement\Components;

/**
 * Class RaterScore
 *
 * aka IndividualRaterScore
 *
 * @package EmployeePerformanceManagement\Components
 */
class RaterScore
{
    private $raterId;

    /**
     * RaterScore constructor.
     * @param $raterId
     */
    public function __construct($raterId)
    {
        $this->raterId = $raterId;
    }

    public function getRaterId()
    {
        return $this->raterId;
    }

    public function getScore()
    {
        return new Score($this->points);
    }
}