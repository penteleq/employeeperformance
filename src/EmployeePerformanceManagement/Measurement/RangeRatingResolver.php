<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 04.12.2015
 * Time: 18:25
 */

namespace EmployeePerformanceManagement\Measurement;

use EmployeePerformanceManagement\Contracts\PerformanceRatingResolver;
use EmployeePerformanceManagement\Exceptions\UnavailableRatingResultException;

class RangeRatingResolver implements PerformanceRatingResolver
{
    /**
     * Resolve rating from given value
     * @param mixed $value
     * @return mixed
     * @throws UnavailableRatingResultException
     */
    public function resolve($value)
    {
        // TMP hardcode
        $definition = ([
            [[0,   64],  'E', 'Bardzo niski'],
            [[65,  84],  'D', 'Niski'],
            [[85,  100], 'C', 'Umiarkowany'],
            [[100, 110], 'B', 'Dobry'],
            [[111, 999], 'A', 'Wyró¿niaj¹cy'],
        ]);

        foreach ($definition as $d)
        {
            if (in_array(round($value), range($d[0][0], $d[0][1])))
            {
                // Return found definition
                return $d;
            }
        }

        throw new UnavailableRatingResultException(get_class($this), $value);
    }
}