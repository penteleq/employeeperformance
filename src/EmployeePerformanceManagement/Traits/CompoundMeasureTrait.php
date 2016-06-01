<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 06.12.2015
 * Time: 01:19
 */

namespace EmployeePerformanceManagement\Traits;

use Illuminate\Support\Collection;

trait CompoundMeasureTrait
{

//    abstract protected function getCollectionName();

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getComponentMeasures()
    {
        // TODO: Finish Relations
        return Collection::make([]);
    }

    public function isCompound()
    {
        if ($this->getComponentMeasures()->count())
        {
            return true;
        }

        return false;
    }
}