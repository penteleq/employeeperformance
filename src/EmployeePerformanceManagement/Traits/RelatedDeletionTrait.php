<?php

namespace EmployeePerformanceManagement\Traits;

// TODO: Finalize it
trait RelatedDeletionTrait
{
    /**
     * Related model name
     * @return string
     */
    abstract protected function getDeletionRelatedModel();

    /**
     * Determine if the model instance has been soft-deleted.
     *
     * @return bool
     */
    public function trashed()
    {
        return $this->{$this->getDeletionRelatedModel()}->trashed();
    }
}