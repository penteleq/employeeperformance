<?php

namespace EmployeePerformanceManagement\Contracts;

/**
 * Defines a result from an employee performance management (EPM) process or "appraisal". An appraisal typically consists of a number of sections,
 * including an overall rating or score, competency ratings, objective ratings, and other ratings
 * (e.g., "core values" is an example of a section within some appraisals outside of the competency or objectives section).
 * Also includes result metadata, such as appraisal dates, "prepared by," etc
 *
 * @package EmployeePerformanceManagement\Contracts
 */
interface PerformanceResult
{
    /**
     * Numeric or textual result value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore();

    /**
     * Evaluated rating of given score
     * Common usage with evaluation algorithm
     *
     * @return mixed
     */
    public function getRating();
}