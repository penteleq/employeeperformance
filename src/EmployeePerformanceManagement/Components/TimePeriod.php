<?php

namespace EmployeePerformanceManagement\Components;

class TimePeriod
{
    protected $start_date;
    protected $end_date;

    /**
     * TimePeriod constructor.
     * @param $start_date
     * @param $end_date
     */
    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function getStartDate()
    {
        return $this->start_date;
    }

    public function getEndDate()
    {
        return $this->end_date;
    }
}