<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Serializer;

use BenatEspina\StackExchangeApiClient\Model\Model;

/**
 * The serializer abstract class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Serializer
{
    /**
     * Fully qualified model class name.
     *
     * @var string
     */
    protected static $class;

    /**
     * Serializes the given data in a correct domain model class.
     *
     * @param mixed $data The given data
     *
     * @throws \Exception when the given data is incorrect
     *
     * @return array|Model
     */
    public static function serialize($data)
    {
        if (false === array_key_exists('items', $data)) {
            throw new \Exception('Given data is incorrect');
        }
        $class = static::className();
        if (count($data['items']) > 1) {
            $objects = [];
            foreach ($data['items'] as $item) {
                $objects[] = $class::fromJson($item);
            }

            return $objects;
        }

        return $class::fromJson($data['items'][0]);
    }

    /**
     * Gets the fully qualified class name.
     *
     * @throws \Exception when the class is not a model instance
     *
     * @return string
     */
    private static function className()
    {
        $reflectionClass = new \ReflectionClass(static::$class);
        if (false === $reflectionClass->implementsInterface(Model::class)) {
            throw new \Exception('Given class name is not a model instance');
        }

        return static::$class;
    }
}
