<?php
/**
 * Created by PhpStorm.
 * User: Rafa�
 * Date: 21.11.2015
 * Time: 14:28
 */

namespace EmployeePerformanceManagement\Repositories;

interface DocumentsRepositoryInterface
{
    public function getDocumentsByTypes(array $types);
}