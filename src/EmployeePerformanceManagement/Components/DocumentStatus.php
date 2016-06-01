<?php

namespace EmployeePerformanceManagement\Components;

use EmployeePerformanceManagement\Contracts\BasicDocument;

class DocumentStatus
{
    protected $document;

    /**
     * DocumentStatus constructor.
     * @param $document
     */
    public function __construct(BasicDocument $document)
    {
        $this->document = $document;
    }
}