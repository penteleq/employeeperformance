<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 04.12.2015
 * Time: 15:27
 */

namespace EmployeePerformanceManagement\Contracts;

/**
 * Interface PerformanceRatingResolver
 *
 * Rating resolver algorithms
 *
 * @package EmployeePerformanceManagement\Contracts
 */
interface PerformanceRatingResolver
{
    /**
     * Resolve rating from given value
     * @param mixed $value
     * @return mixed
     * @throws UnavailableRatingResultException
     */
    public function resolve($value);
}