<?php

namespace EmployeePerformanceManagement\Models;

use EmployeePerformanceManagement\Contracts\BasicDocument;
use EmployeePerformanceManagement\Contracts\ObjectivesPlan as ObjectivesPlanInterface;
use EmployeePerformanceManagement\Components\TimePeriod;
use EmployeePerformanceManagement\Models\Common\TypedDocument as BaseDocument;
use Carbon\Carbon;

/**
 * Supports the specification of objectives, groups of objectives, and related metrics and metadata.
 * Used in integration of such systems as compensation management, business performance management, employee performance management, and project management systems.
 *
 * @property mixed id
 * @package EmployeePerformanceManagement\Models
 */
class ObjectivesPlan extends BaseDocument implements ObjectivesPlanInterface, BasicDocument
{
    protected $table = 'epm_objectives_plans';

    protected $appends = ['period', 'document_id'];

    protected $fillable = ['document_id', 'subject_id', 'preparer_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_date', 'end_date'];

    private $_documentAttributes = null;

    /**
     * @param $value
     * @return null
     */
    public function setDocumentIdAttribute($value)
    {
        $this->_documentAttributes['document_id'] = $value;
    }

    public function getDocumentAttributes()
    {
        return $this->_documentAttributes;
    }

    /**
     * @param TimePeriod $period
     */
    public function setPeriodAttribute(TimePeriod $period)
    {
        $this->attributes['start_date'] = $period->getStartDate();
        $this->attributes['end_date']   = $period->getEndDate();
    }

    /**
     * @return TimePeriod
     */
    public function getPeriodAttribute()
    {
        return new TimePeriod($this->attributes['start_date'], $this->attributes['end_date']);
    }

    public static function boot()
    {
        parent::boot();

        // Be sure to create valid document object
        static::creating(function($plan) {
            //
        });
    }

    public function getObjectives()
    {
        // TODO: Implement getObjectives() method.
    }

    public function getObjectiveGroups()
    {
        // TODO: Implement getObjectiveGroups() method.
    }

    /**
     * Get
     * @return \EmployeePerformanceManagement\Entities\TimePeriod
     */
    public function getPlanPeriod()
    {
        // TODO: Implement getPlanPeriod() method.
    }

    /**
     * Evaluated employee or organisation unit
     * @return \EmployeePerformanceManagement\Contracts\PlanSubject
     */
    public function getPlanSubject()
    {
        // TODO: Implement getPlanSubject() method.
    }
}