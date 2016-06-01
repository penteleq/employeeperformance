<?php

namespace EmployeePerformanceManagement\Contracts\Result;

interface ObjectiveResult extends Result
{
    /**
     * A code classifying the status of an objective. This is an HR-XML open list.
     * Enumerated values are "in progress," "complete," canceled," "not known," and "not applicable."
     * @return mixed
     */
    public function getObjectiveStatusCode();

    /**
     * Provides information about result with given metric
     * @return mixed
     */
    public function getResultAgainstMetric();



    public function getIndividualRaterScore();

//    public function getMultiRaterScoreSummary();

    public function getMultiRaterGroupScore();
}