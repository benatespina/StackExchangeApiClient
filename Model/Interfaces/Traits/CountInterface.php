<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;

/**
 * Interface CountInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
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
