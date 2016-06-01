<?php

namespace EmployeePerformanceManagement\Repositories\Criteria;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;
use EmployeePerformanceManagement\Components\TimePeriod;

class WithinTimePeriod extends Criteria
{
    protected $period;

    /**
     * WithinTimePeriod constructor.
     * @param $period
     */
    public function __construct(TimePeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->where('end_date', '=', $this->period->getEndDate())->where('start_date', '=', $this->period->getStartDate());
        return $model;
    }
}