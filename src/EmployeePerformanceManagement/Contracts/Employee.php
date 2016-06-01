<?php

namespace EmployeePerformanceManagement\Contracts;

/**
 * Basically it is an employee
 * @package EmployeePerformanceManagement\Contracts
 */
interface Employee
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getLastName();
}