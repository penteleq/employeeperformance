<?php

namespace EmployeePerformanceManagement\Exceptions;

use ErrorException as BaseErrorException;

class UnavailableRatingResultException extends BaseErrorException
{
    public function __construct($resolver, $points, $message = "")
    {
        $message = "Undefined rating value: {$points} of {$resolver} class. " . $message;

        parent::__construct($message);
    }
}