<?php

namespace EmployeePerformanceManagement\Contracts\Result;

interface Result
{
    /**
     * A free form note. The lang attribute identifies the language that the note is in. The author identifies the author of the note.
     * The entryDate indicates the date the note was entered or last modified.
     * @return \EmployeePerformanceManagement\Contracts\Comment
     */
    public function getComment();
}