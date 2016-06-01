<?php

namespace EmployeePerformanceManagement\Contracts;

interface BasicDocument
{
    /**
     * @return integer
     */
    public function getDocumentID();

    /**
     * Document owner
     * @param array $columns
     * @return DocumentPreparer
     */
    public function getPreparer(array $columns = null);
}