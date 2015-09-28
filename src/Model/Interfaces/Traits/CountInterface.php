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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;

/**
 * Interface CountInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface CountInterface
{
    /**
     * Sets number of answers.
     *
     * @param int $answerCount The number of answers
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount);

    /**
     * Gets number of answers.
     *
     * @return int
     */
    public function getAnswerCount();

    /**
     * Sets badge count.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface $badgeCount The badge count
     *
     * @return $this self Object
     */
    public function setBadgeCount(BadgeCountInterface $badgeCount);

    /**
     * Gets badge count.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface
     */
    public function getBadgeCount();

    /**
     * Sets question id.
     *
     * @param int $questionCount The question id
     *
     * @return $this self Object
     */
    public function setQuestionCount($questionCount);

    /**
     * Gets question id.
     *
     * @return int
     */
    public function getQuestionCount();
}
