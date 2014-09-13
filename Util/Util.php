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
 * Class Util.
 *
 * @package BenatEspina\StackExchangeApiClient\Util
 */
class Util
{
    /**
     * Deletes the resource if exists. After of the element is removed, array is rearranged.
     *
     * @param mixed $resource The resource, it can be string, integer or whatever object
     * @param array $array    The array that contains the elements
     *
     * @return array<mixed>
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

    /**
     * Sets the resource if exists.
     *
     * @param array  $array    The array that contains the elements
     * @param mixed  $resource The resource, it can be string, integer or whatever object
     * @param string $key      The index of array
     *
     * @return mixed
     */
    public static function setIfExists($array, $resource, $key)
    {
        if (isset($array[$key]) === true) {
            return $resource[$key];
        }
    }

    /**
     * Checks if any string of the array is equal to the resource given.
     *
     * @param string   $resource The resource
     * @param string[] $array    The array that contains the strings
     *
     * @return bool
     */
    public static function isEqual($resource, $array)
    {
        foreach ($array as $string) {
            if ($resource === $string) {
                return true;
            }
        }

        return false;
    }
}
