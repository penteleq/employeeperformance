<?php

namespace EmployeePerformanceManagement\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use EmployeePerformanceManagement\Contracts\BasicDocument;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Document model
 * @property mixed preparer
 */
class Document extends Eloquent implements BasicDocument
{
    use SoftDeletes;

    protected $table = 'epm_document';

    protected $fillable = ['document_id', 'preparer_id', 'valid_from', 'valid_to'];

    /**
     * Document identifier
     * @return string
     */
    public function getDocumentID()
    {
        return $this->attributes['document_id'];
    }

    /**
     * Get Document's owner
     * @param array $columns
     * @return \EmployeePerformanceManagement\Contracts\DocumentPreparer
     */
    public function getPreparer(array $columns = null)
    {
        return ($columns === null) ? $this->preparer : $this->preparer()->get($columns)->first();
    }

    /**
     * Get the phone record associated with the user.
     */
    public function preparer()
    {
        // IoC model of provided interface
        $model = app()->make('EmployeePerformanceManagement\Contracts\DocumentPreparer');

        return $this->hasOne($model, 'id', 'preparer_id');
    }
}