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

interface Serializer
{
    /**
     * Serializes the given data in a correct domain model class.
     *
     * @param mixed $data The given data
     *
     * @return mixed
     */
    public function serialize($data);
}