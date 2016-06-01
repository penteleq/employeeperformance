<?php

namespace EmployeePerformanceManagement\Repositories\Criteria;

use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;

class Trashed extends Criteria
{
    protected $trashed = false;

    /**
     * Trashed constructor.
     * @param bool $trashed
     */
    public function __construct($trashed)
    {
        $this->trashed = $trashed;
    }

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->whereHas('document', function($query) {
            switch($this->trashed)
            {
                case true:
                    $query->whereNotNull('deleted_at');
                    break;
                case false:
                    $query->whereNull('deleted_at');
                    break;
            }
            return $query;
        });

        return $model;
    }
}