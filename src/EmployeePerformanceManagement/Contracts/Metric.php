<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 05.12.2015
 * Time: 12:51
 */

namespace EmployeePerformanceManagement\Contracts;

interface Metric extends NamedElement
{
    /**
     * Numeric or textual result value
     * @return \EmployeePerformanceManagement\Components\Score
     */
    public function getScore();

    /**
     * A set of codes classifying an action or direction to be performed relative to a metric or target. This is an HR-XML Open List.
     * @return mixed
     */
    public function getObjectiveActionCode();
}