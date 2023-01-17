<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class Copyright extends Modifier
{
    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        return "<span>&copy; ".date("Y")." by $value</span>";
    }
}
