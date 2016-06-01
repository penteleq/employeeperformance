<?php

namespace EmployeePerformanceManagement\Components;

class Score
{
    /**
     * Numeric | Text
     * ScoreNumericType
     *
     * @var
     */
    protected $type;

    /**
     * @var mixed
     */
    private $value;

    /**
     * Score constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        if (is_numeric($value))
        {
            $this->type = 'numeric';
        }

        if (is_string($value))
        {
            $this->type = 'text';
        }

        $this->value = $value;
    }

    public function isNumeric()
    {
        return (bool) ($this->type = 'numeric');
    }
}