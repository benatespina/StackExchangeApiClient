<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait AnsweredTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait AnsweredTrait
{
    /**
     * Boolean that shows if question is answered or not.
     *
     * @var bool
     */
    protected $isAnswered;

    /**
     * Sets is answered.
     *
     * @param bool|null $isAnswered The isAnswered boolean
     *
     * @return $this self Object
     */
    public function setAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    /**
     * Gets is answered.
     *
     * @return bool|null
     */
    public function isAnswered()
    {
        return $this->isAnswered;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadAnswered($resource)
    {
        $this->isAnswered = Util::setIfBoolExists($resource, 'is_answered');
    }
}
