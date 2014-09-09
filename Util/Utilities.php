<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Util;

/**
 * Class Utilities.
 *
 * @package BenatEspina\StackExchangeApiClient\Util
 */
class Utilities
{
    /**
     * Deletes the resource if exists. After of the element is removed, array is rearranged.
     *
     * @param mixed $resource The resource, it can be string, integer or whatever object
     * @param array $array    The array that contains the elements
     *
     * @return array
     */
    public static function removeElement($resource, $array)
    {
        $key = array_search($resource, $array);
        if ($key !== false) {
            unset($array[$key]);
            array_values($array);
        }

        return $array;
    }
}
