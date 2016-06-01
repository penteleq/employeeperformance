<?php

namespace EmployeePerformanceManagement\Contracts;

interface DocumentPreparer extends Employee
{
    /**
     * Extract preparer's documents base on particulary types
     * @param array $types
     * @return array
     * @internal param null $type
     */
    public function getDocuments($types = []);
}