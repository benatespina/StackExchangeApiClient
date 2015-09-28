<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\AnsweredInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\GenericIdInterface;

/**
 * Interface SearchExcerptInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface SearchExcerptInterface extends AnsweredInterface, GenericIdInterface
{
    /**
     * Sets answer count.
     *
     * @param int|null $answerCount The answer count
     *
     * @return $this self Object
     */
    public function setAnswerCount($answerCount);

    /**
     * Gets answer count.
     *
     * @return int|null
     */
    public function getAnswerCount();

    /**
     * Sets answer id.
     *
     * @param int|null $answerId The answer id
     *
     * @return $this self Object
     */
    public function setAnswerId($answerId);

    /**
     * Gets answer id.
     *
     * @return int|null
     */
    public function getAnswerId();

    /**
     * Sets body.
     *
     * @param string $body The body
     *
     * @return $this self Object
     */
    public function setBody($body);

    /**
     * Gets body.
     *
     * @return string
     */
    public function getBody();

    /**
     * Sets closed date.
     *
     * @param \DateTime|null $closedDate The closed date
     *
     * @return $this self Object
     */
    public function setClosedDate(\DateTime $closedDate);

    /**
     * Gets closed date.
     *
     * @return \DateTime|null
     */
    public function getClosedDate();

    /**
     * Sets community owned date.
     *
     * @param \DateTime $communityOwnedDate The community owned date
     *
     * @return $this self Object
     */
    public function setCommunityOwnedDate(\DateTime $communityOwnedDate);

    /**
     * Gets community owned date.
     *
     * @return \DateTime
     */
    public function getCommunityOwnedDate();

    /**
     * Adds equivalent tag search.
     *
     * @param string|null $equivalentTagSearch The equivalent tag search
     *
     * @return $this self Object
     */
    public function addEquivalentTagSearch($equivalentTagSearch);

    /**
     * Removes equivalent tag search.
     *
     * @param string|null $equivalentTagSearch The equivalent tag search
     *
     * @return $this self Object
     */
    public function removeEquivalentTagSearch($equivalentTagSearch);

    /**
     * Gets array of equivalent tags search.
     *
     * @return string[]
     */
    public function getEquivalentTagsSearch();

    /**
     * Sets excerpt.
     *
     * @param string $excerpt The excerpt
     *
     * @return $this self Object
     */
    public function setExcerpt($excerpt);

    /**
     * Gets excerpt.
     *
     * @return string
     */
    public function getExcerpt();

    /**
     * Sets has accepted answer.
     *
     * @param bool|null $hasAcceptedAnswer The has accepted answer boolean
     *
     * @return $this self Object
     */
    public function setAcceptedAnswer($hasAcceptedAnswer);

    /**
     * Gets has accepted answer.
     *
     * @return bool|null
     */
    public function hasAcceptedAnswer();

    /**
     * Sets is accepted.
     *
     * @param bool|null $isAccepted The isAccepted boolean
     *
     * @return $this self Object
     */
    public function setAccepted($isAccepted);

    /**
     * Gets is accepted.
     *
     * @return bool|null
     */
    public function isAccepted();

    /**
     * Sets item type.
     *
     * @param string $itemType The item type that can be 'question' or 'answer'
     *
     * @return $this self Object
     */
    public function setItemType($itemType);

    /**
     * Gets item type.
     *
     * @return string
     */
    public function getItemType();

    /**
     * Sets last activity date.
     *
     * @param \DateTime $lastActivityDate The last activity date
     *
     * @return $this self Object
     */
    public function setLastActivityDate(\DateTime $lastActivityDate);

    /**
     * Gets last activity date.
     *
     * @return \DateTime
     */
    public function getLastActivityDate();

    /**
     * Sets last activity user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $lastActivityUser The last
     *                                                                                                    activity user
     *
     * @return $this self Object
     */
    public function setLastActivityUser(ShallowUserInterface $lastActivityUser);

    /**
     * Gets last activity user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getLastActivityUser();

    /**
     * Sets locked date.
     *
     * @param \DateTime|null $lockedDate The locked date
     *
     * @return $this self Object
     */
    public function setLockedDate(\DateTime $lockedDate);

    /**
     * Gets locked date.
     *
     * @return \DateTime|null
     */
    public function getLockedDate();

    /**
     * Sets owner.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $owner The owner
     *
     * @return $this self Object
     */
    public function setOwner(ShallowUserInterface $owner);

    /**
     * Gets owner.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getOwner();

    /**
     * Sets question id.
     *
     * @param int|null $questionId The question id
     *
     * @return $this self Object
     */
    public function setQuestionId($questionId);

    /**
     * Gets question id.
     *
     * @return int|null
     */
    public function getQuestionId();

    /**
     * Sets question score.
     *
     * @param int|null $questionScore The question score
     *
     * @return $this self Object
     */
    public function setQuestionScore($questionScore);

    /**
     * Gets question score.
     *
     * @return int|null
     */
    public function getQuestionScore();

    /**
     * Sets score.
     *
     * @param int $score The score
     *
     * @return $this self Object
     */
    public function setScore($score);

    /**
     * Gets score.
     *
     * @return int
     */
    public function getScore();
}
