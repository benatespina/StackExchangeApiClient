<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface AnsweredInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface AnsweredInterface
{
    /**
     * Sets is answered.
     *
     * @param boolean|null $isAnswered The isAnswered boolean
     *
     * @return $this self Object
     */
    public function setIsAnswered($isAnswered);

    /**
     * Gets is answered.
     *
     * @return boolean|null
     */
    public function isAnswered();
}
