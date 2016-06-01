<?php

namespace EmployeePerformanceManagement\Models\Common;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as Eloquent;
use EmployeePerformanceManagement\Models\Document as DocumentEntity;
use EmployeePerformanceManagement\Contracts\BasicDocument;
//use EmployeePerformanceManagement\Traits\RelatedDeletionTrait;

/**
 * Abstract wrapping class TypedDocument
 *
 * @property \EmployeePerformanceManagement\Models\Document document
 * @package EmployeePerformanceManagement\Models
 */
abstract class TypedDocument extends Eloquent implements BasicDocument
{
//    use RelatedDeletionTrait;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['document'];

    /**
     * Indicates if the model should be timestamped.
     * They are saved within document entity
     *
     * @var bool
     */
    public $timestamps = false;

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

            $document = DocumentEntity::create([
                'document_id' => 666,
                'preparer_id' => 1
            ]); // $record->getDocumentAttributes());

            // Bind model
            $record->setAttribute('id', $document->getKey());

            // Save this entity
            $record->save();
        });
    }

    /**
     * Delete the model from the database.
     * Do not delete this object - apply deletion only on DocumentEntity
     *
     * @return bool|null
     * @throws \Exception
     */
    public function delete()
    {
        $this->document->delete();
    }

    /**
     * @return integer
     */
    public function getDocumentID()
    {
        return $this->document->getDocumentID();
    }

    /**
     * Document owner
     * @param array $columns
     * @return \EmployeePerformanceManagement\Contracts\DocumentPreparer
     */
    public function getPreparer(array $columns = null)
    {
        return $this->document->getPreparer($columns);
    }

    public function document()
    {
        return $this->hasOne('EmployeePerformanceManagement\Models\Document', 'id')
                    // This make an availability for repository to access all related document records
                    ->withTrashed();
    }

//    protected function getDeletionRelatedModel()
//    {
//        return 'document';
//    }
}