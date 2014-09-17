<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait CountTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait CountTrait
{
    /**
     * Answer count.
     *
     * @var int
     */
    protected $answerCount;

    /**
     * The total Badges, segregated by rank.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface
     */
    protected $badgeCount;

    /**
     * Number of questions.
     *
     * @var int
     */
    protected $questionCount;

    /**
     * Sets number of answers.
     *
     * @param int $answerCount The number of answers
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * Gets number of answers.
     *
     * @return int
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * Sets badge count.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface $badgeCount The badge count
     *
     * @return $this self Object
     */
    public function setBadgeCount(BadgeCountInterface $badgeCount)
    {
        $this->badgeCount = $badgeCount;

        return $this;
    }

    /**
     * Gets badge count.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface
     */
    public function getBadgeCount()
    {
        return $this->badgeCount;
    }

    /**
     * Sets question id.
     *
     * @param int $questionCount The question id
     *
     * @return $this self Object
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;
        
        return $this;
    }

    /**
     * Gets question id.
     *
     * @return int
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadCount($resource)
    {
        $this->answerCount = Util::setIfExists($resource, 'answer_count');
        $this->badgeCount = new BadgeCount(Util::setIfExists($resource, 'badge_counts'));
        $this->questionCount = Util::setIfExists($resource, 'question_count');
    }
}
