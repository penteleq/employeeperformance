<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 18:05
 */

namespace EmployeePerformanceManagement\Models\Common;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RelatedModel
 * @package EmployeePerformanceManagement\Models\Common
 */
abstract class RelatedModel extends Eloquent
{
    /**
     * Indicates if the model should be timestamped.
     * They are saved within document entity
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Extract array of measurement attributes
     * @return mixed
     */
    abstract protected function relatedAttributesDefinition();

    /**
     *
     */
//    abstract protected function getRelatedModel();

    abstract protected function related();

    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return static
     */
    public static function create(array $attributes = [])
    {
        DB::transaction(function() use ($attributes)
        {
            $record = new static($attributes);

//            $relatedModel = $record->getRelatedModel();

            // Save and create related entity
            $measureEntity = MeasureEntity::create($record->extractRelatedAttributes());

            // Bind model
            $record->setAttribute('id', $measureEntity->getKey());

            // Save this entity
            $record->save();
        });
    }

    /**
     * Delete the model from the database.
     * Apply deletion only on Measure entity
     *
     * @return bool|null
     * @throws \Exception
     */
    public function delete()
    {
        $this->related()->delete();
    }
}