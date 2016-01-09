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

use BenatEspina\StackExchangeApiClient\Model\Answer;

/**
 * The answer serializer class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class AnswerSerializer extends Serializer
{
    /**
     * {@inheritdoc}
     */
    protected static $class = Answer::class;
}
