<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait AnsweredTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait AnsweredTrait
{
    /**
     * Boolean that shows if question is answered or not.
     *
     * @var boolean
     */
    protected $isAnswered;

    /**
     * Sets is answered.
     *
     * @param boolean|null $isAnswered The isAnswered boolean
     *
     * @return $this self Object
     */
    public function setIsAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    /**
     * Gets is answered.
     *
     * @return boolean|null
     */
    public function isAnswered()
    {
        return $this->isAnswered;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadAnswered($resource)
    {
        $this->isAnswered = Util::setIfExists($resource, 'is_answered');
    }
}
