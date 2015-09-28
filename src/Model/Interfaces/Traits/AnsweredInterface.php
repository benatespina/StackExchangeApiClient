<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface AnsweredInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AnsweredInterface
{
    /**
     * Sets is answered.
     *
     * @param bool|null $isAnswered The isAnswered boolean
     *
     * @return $this self Object
     */
    public function setAnswered($isAnswered);

    /**
     * Gets is answered.
     *
     * @return bool|null
     */
    public function isAnswered();
}
