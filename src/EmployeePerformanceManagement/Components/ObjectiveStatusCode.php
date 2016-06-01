<?php

namespace EmployeePerformanceManagement\Components;

class ObjectiveStatusCode
{
    /**
     * A code classifying the status of an objective. This is an HR-XML open list.
     * Enumerated values are "in progress," "complete," canceled," "not known," and "not applicable."
     * @var int
     */
    protected $code = 0;

    /**
     * List of available registered objective statuses
     * @var array
     */
    protected static $codes = [
        0 => "Not known",
        1 => "In progress",
        2 => "Completed",
        3 => "Cancelled",
        4 => "Not applicable"
    ];

    /**
     * ObjectiveStatusCode constructor.
     * @param $code
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getText()
    {
        return $this->__toString();
    }

    function __toString()
    {
        return self::$codes[$this->getCode()];
    }
}