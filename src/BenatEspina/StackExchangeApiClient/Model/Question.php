<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The question model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Question implements Model
{
    public static function fromJson(array $data)
    {
        return new self();
    }

    public static function fromProperties()
    {
    }

    private function __construct()
    {
    }
}
