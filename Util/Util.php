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
     * @param mixed   $resource The resource, it can be string, integer or whatever object
     * @param mixed[] $array    The array that contains the elements
     *
     * @return mixed[]
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
     * Sets the resource if exists, furthermore it has to be an string, otherwise it will convert.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return string|null
     */
    public static function setIfStringExists($resource, $key)
    {
        if (self::setIfExists($resource, $key) !== null) {
            return (string)$resource[$key];
        }
    }

    /**
     * Sets the resource if exists and if it is an integer.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return int|null
     */
    public static function setIfIntegerExists($resource, $key)
    {
        if (self::setIfExists($resource, $key) !== null && is_numeric($resource[$key]) === true) {
            return $resource[$key];
        }
    }

    /**
     * Sets the resource if exists and if it is a boolean.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return boolean|null
     */
    public static function setIfBoolExists($resource, $key)
    {
        if (self::setIfExists($resource, $key) !== null && is_bool($resource[$key]) === true) {
            return $resource[$key];
        }
    }

    /**
     * Sets the array resource if exists.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return mixed[]|array()
     */
    public static function setIfArrayExists($resource, $key)
    {
        if (self::setIfExists($resource, $key) !== null) {
            $result = array();

            foreach ($resource[$key] as $element) {
                $result[] = $element;
            }

            return $result;
        }

        return array();
    }

    /**
     * Sets the datetime resource if exists.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return \DateTime|null
     */
    public static function setIfDateTimeExists($resource, $key)
    {
        if (self::setIfExists($resource, $key) !== null) {
            return new \DateTime('@' . $resource[$key]);
        }
    }

    /**
     * Checks if any string of the array is equal to the resource given.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     * @param string[]     $array    The array that contains the strings
     *
     * @return string|null
     */
    public static function isEqual($resource, $key, $array = array())
    {
        if (self::setIfExists($resource, $key) !== null && sizeof($array) > 0) {
            foreach ($array as $string) {
                if ($resource[$key] === $string) {
                    return $string;
                }
            }
        }

        return null;
    }

    /**
     * Sets the resource if exists.
     *
     * @param null|mixed[] $resource The resource generally $json
     * @param string       $key      The index of resource
     *
     * @return string|int|null
     */
    public static function setIfExists($resource, $key)
    {
        if (isset($resource[$key]) === true) {
            return $resource[$key];
        }
    }

    /**
     * Checks if any string of the array is equal to the element given.
     * It is quite similar than isEqual, but this one checks a string, not a resource into json.
     *
     * @param string   $element The element that is a string
     * @param string[] $array   The array that contains the strings
     *
     * @return boolean
     */
    public static function coincidesElement($element, $array)
    {
        foreach ($array as $string) {
            if ($string === $element) {
                return true;
            }
        }

        return false;
    }
}
