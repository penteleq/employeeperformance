<?php

namespace EmployeePerformanceManagement\Models;

use EmployeePerformanceManagement\Contracts\DocumentPreparer;
use EmployeePerformanceManagement\Contracts\Employee as EmployeeInterface;
use EmployeePerformanceManagement\Contracts\PlanSubject;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Employee extends Eloquent implements EmployeeInterface, DocumentPreparer, PlanSubject
{
    protected $table = 'sam_resources';

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getLastName()
    {
        // TODO: Implement getLastName() method.
    }

    /**
     * @param array $types
     * @return array
     */
    public function getDocuments($types = [])
    {
//        $list = app()->make('EmployeePerformanceManagement\DocumentsTypesList');
//
//        $documents = app()->make('EmployeePerformanceManagement\Repositories\DocumentsRepositoryInterface')->getDocumentsByTypes($list->toArray());
//
//        dd($documents);

        return [];
    }
}