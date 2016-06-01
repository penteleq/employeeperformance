<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 16:56
 */

namespace EmployeePerformanceManagement\Models\Common;

use Illuminate\Support\Facades\DB;
use EmployeePerformanceManagement\Contracts\Measureable;

/**
 * Abstract wrapping class TypedDocument
 *
 * @property \EmployeePerformanceManagement\Models\Measure measure
 * @package EmployeePerformanceManagement\Models
 */
abstract class BaseMeasure extends RelatedModel implements Measureable
{
    protected $appends = ['weight'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['measure'];

    protected function relatedAttributesDefinition()
    {
        return [
            'weight' => function($model) {

            }
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function measure()
    {
        return $this->hasOne('EmployeePerformanceManagement\Models\Measure', 'id');
    }

    public function getWeightAttribute()
    {
//        return $this->attributes['weight'];
    }

    public function setWeightAttribute($value)
    {
//        $this->attributes['weight'] = $value;
    }

    public function getWeight()
    {
        return $this->measure->getWeight();
    }

    public function related()
    {
        return $this->measure;
    }
}