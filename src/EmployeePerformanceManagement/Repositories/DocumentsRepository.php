<?php

namespace EmployeePerformanceManagement\Repositories;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Eloquent\Repository;
use EmployeePerformanceManagement\Repositories\Criteria\Trashed;

abstract class DocumentsRepository extends Repository implements DocumentsRepositoryInterface
{
    public function withTrashed()
    {
        $this->pushCriteria(new Trashed(true));
        return $this;
    }

    // Base usage
    public function withoutTrashed()
    {
        $this->pushCriteria(new Trashed(false));
        return $this;
    }

    public function onlyTrashed()
    {
        $this->pushCriteria(new Trashed(true));
        return $this;
    }

    public function getDocumentsByTypes(array $types)
    {
        foreach ($types as $_model)
        {
            $model = new $_model;

            $found = $model->all();

            dd($found);
        }
    }
}