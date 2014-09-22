<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\TagInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Tag.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Tag implements TagInterface
{
    /**
     * The count.
     *
     * @var int
     */
    protected $count;

    /**
     * Boolean that shows if it has a synonyms or not.
     *
     * @var boolean
     */
    protected $hasSynonyms;

    /**
     * Boolean that shows if it is moderator only or not.
     *
     * @var boolean
     */
    protected $isModeratorOnly;

    /**
     * Boolean that shows if it is required or not.
     *
     * @var boolean
     */
    protected $isRequired;

    /**
     * Last activity date.
     *
     * @var \DateTime|null
     */
    protected $lastActivityDate;

    /**
     * The name.
     *
     * @var string
     */
    protected $name;

    /** An array of synonyms.
     *
     * @var string[]
     */
    protected $synonyms;

    /**
     * The user id.
     *
     * @var int|null
     */
    protected $userId;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->count = Util::setIfIntegerExists($json, 'count');
        $this->hasSynonyms = Util::setIfBoolExists($json, 'has_synonyms');
        $this->isModeratorOnly = Util::setIfBoolExists($json, 'is_moderator_only');
        $this->isRequired = Util::setIfBoolExists($json, 'is_required');
        $this->lastActivityDate = Util::setIfDateTimeExists($json, 'last_activity_date');
        $this->name = Util::setIfStringExists($json, 'name');
        $this->synonyms = Util::setIfArrayExists($json, 'synonyms');
        $this->userId = Util::setIfIntegerExists($json, 'user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function setSynonyms($hasSynonyms)
    {
        $this->hasSynonyms = $hasSynonyms;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasSynonyms()
    {
        return $this->hasSynonyms;
    }

    /**
     * {@inheritdoc}
     */
    public function setModeratorOnly($isModeratorOnly)
    {
        $this->isModeratorOnly = $isModeratorOnly;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isModeratorOnly()
    {
        return $this->isModeratorOnly;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isRequired()
    {
        return $this->isRequired;
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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function addSynonym($synonym)
    {
        $this->synonyms[] = $synonym;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeSynonym($synonym)
    {
        $this->synonyms = Util::removeElement($synonym, $this->synonyms);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
