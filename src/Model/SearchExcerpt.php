<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract as BaseSearchExcerpt;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SearchExcerptInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\AnsweredTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\GenericIdTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class SearchExcerpt.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SearchExcerpt extends BaseSearchExcerpt implements SearchExcerptInterface
{
    use AnsweredTrait,
        GenericIdTrait;

    const ITEM_TYPE_ANSWER = 'answer';
    const ITEM_TYPE_QUESTION = 'question';

    /**
     * The answer count.
     *
     * @var int|null
     */
    protected $answerCount;

    /**
     * Closed date.
     *
     * @var \DateTime|null
     */
    protected $closedDate;

    /**
     * Community owned date.
     *
     * @var \DateTime|null
     */
    protected $communityOwnedDate;

    /**
     * Array that contains equivalent tags search.
     *
     * @var string[]
     */
    protected $equivalentTagsSearch;

    /**
     * The excerpt.
     *
     * @var string
     */
    protected $excerpt;

    /**
     * Boolean that shows if it has accepted answer or not.
     *
     * @var bool|null
     */
    protected $hasAcceptedAnswer;

    /**
     * Boolean that shows if it is accepted or not.
     *
     * @var bool|null
     */
    protected $isAccepted;

    /**
     * Item type that can be 'question' or 'answer'.
     *
     * @var string
     */
    protected $itemType;

    /**
     * Last activity date.
     *
     * @var \DateTime
     */
    protected $lastActivityDate;

    /**
     * Last activity user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $lastActivityUser;

    /**
     * Locked date.
     *
     * @var \DateTime|null
     */
    protected $lockedDate;

    /**
     * The owner.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $owner;

    /**
     * Question score.
     *
     * @var int|null
     */
    protected $questionScore;

    /**
     * The score.
     *
     * @var int
     */
    protected $score;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);

        $this->loadAnswered($json);
        $this->loadGenericId($json);

        $this->answerCount = Util::setIfIntegerExists($json, 'answer_count');
        $this->closedDate = Util::setIfDateTimeExists($json, 'closed_date');
        $this->communityOwnedDate = Util::setIfDateTimeExists($json, 'community_owned_date');
        $this->equivalentTagsSearch = Util::setIfArrayExists($json, 'equivalent_tag_search');
        $this->excerpt = Util::setIfStringExists($json, 'excerpt');
        $this->hasAcceptedAnswer = Util::setIfBoolExists($json, 'has_accepted_answer');
        $this->isAccepted = Util::setIfBoolExists($json, 'is_accepted');
        $this->itemType = Util::isEqual($json, 'item_type', [self::ITEM_TYPE_ANSWER, self::ITEM_TYPE_QUESTION]);
        $this->lastActivityDate = Util::setIfDateTimeExists($json, 'last_activity_date');
        $this->lastActivityUser = new ShallowUser(Util::setIfArrayExists($json, 'last_activity_user'));
        $this->lockedDate = Util::setIfDateTimeExists($json, 'locked_date');
        $this->owner = new ShallowUser(Util::setIfArrayExists($json, 'owner'));
        $this->questionScore = Util::setIfIntegerExists($json, 'question_score');
        $this->score = Util::setIfIntegerExists($json, 'score');
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setClosedDate(\DateTime $closedDate)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setCommunityOwnedDate(\DateTime $communityOwnedDate)
    {
        $this->communityOwnedDate = $communityOwnedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommunityOwnedDate()
    {
        return $this->communityOwnedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function addEquivalentTagSearch($equivalentTagSearch)
    {
        $this->equivalentTagsSearch[] = $equivalentTagSearch;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeEquivalentTagSearch($equivalentTagSearch)
    {
        $this->equivalentTagsSearch = Util::removeElement($equivalentTagSearch, $this->equivalentTagsSearch);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEquivalentTagsSearch()
    {
        return $this->equivalentTagsSearch;
    }

    /**
     * {@inheritdoc}
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * {@inheritdoc}
     */
    public function setAcceptedAnswer($hasAcceptedAnswer)
    {
        $this->hasAcceptedAnswer = $hasAcceptedAnswer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAcceptedAnswer()
    {
        return $this->hasAcceptedAnswer;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccepted()
    {
        return $this->isAccepted;
    }

    /**
     * {@inheritdoc}
     */
    public function setItemType($itemType)
    {
        if (Util::coincidesElement($itemType, [self::ITEM_TYPE_ANSWER, self::ITEM_TYPE_QUESTION]) === true) {
            $this->itemType = $itemType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastActivityUser(ShallowUserInterface $lastActivityUser)
    {
        $this->lastActivityUser = $lastActivityUser;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastActivityUser()
    {
        return $this->lastActivityUser;
    }

    /**
     * {@inheritdoc}
     */
    public function setLockedDate(\DateTime $lockedDate)
    {
        $this->lockedDate = $lockedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setOwner(ShallowUserInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionScore($questionScore)
    {
        $this->questionScore = $questionScore;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionScore()
    {
        return $this->questionScore;
    }

    /**
     * {@inheritdoc}
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScore()
    {
        return $this->score;
    }
}
