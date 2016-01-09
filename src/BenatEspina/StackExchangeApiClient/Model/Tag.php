<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The tag model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Tag implements Model
{
    private $count;
    private $hasSynonyms;
    private $isModeratorOnly;
    private $isRequired;
    private $lastActivityDate;
    private $name;
    private $synonyms;
    private $userId;

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('count', $data) ? $data['count'] : null,
            array_key_exists('has_synonyms', $data) ? $data['has_synonyms'] : null,
            array_key_exists('is_moderator_only', $data) ? $data['is_moderator_only'] : null,
            array_key_exists('is_required', $data) ? $data['is_required'] : null,
            array_key_exists('last_activity_date', $data) ? new \DateTime('@' . $data['last_activity_date']) : null,
            array_key_exists('name', $data) ? $data['name'] : null,
            array_key_exists('synonyms', $data) ? $data['synonyms'] : null,
            array_key_exists('user_id', $data) ? $data['user_id'] : null
        );
    }

    public static function fromProperties(
        $count,
        $hasSynonyms,
        $isModeratorOnly,
        $isRequired,
        $name,
        $synonyms,
        \DateTime $lastActivityDate = null,
        $userId = null
    ) {
        return new self(
            $count,
            $hasSynonyms,
            $isModeratorOnly,
            $isRequired,
            $lastActivityDate,
            $name,
            $synonyms,
            $userId
        );
    }

    private function __construct(
        $count = null,
        $hasSynonyms = null,
        $isModeratorOnly = null,
        $isRequired = null,
        \DateTime $lastActivityDate = null,
        $name = null,
        $synonyms = null,
        $userId = null
    ) {
        $this->count = $count;
        $this->hasSynonyms = $hasSynonyms;
        $this->isModeratorOnly = $isModeratorOnly;
        $this->isRequired = $isRequired;
        $this->lastActivityDate = $lastActivityDate;
        $this->name = $name;
        $this->synonyms = $synonyms;
        $this->userId = $userId;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    public function getHasSynonyms()
    {
        return $this->hasSynonyms;
    }

    public function setHasSynonyms($hasSynonyms)
    {
        $this->hasSynonyms = $hasSynonyms;

        return $this;
    }

    public function getIsModeratorOnly()
    {
        return $this->isModeratorOnly;
    }

    public function setIsModeratorOnly($isModeratorOnly)
    {
        $this->isModeratorOnly = $isModeratorOnly;

        return $this;
    }

    public function getIsRequired()
    {
        return $this->isRequired;
    }

    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    public function getLastActivityDate()
    {
        return $this->lastActivityDate;
    }

    public function setLastActivityDate(\DateTime $lastActivityDate)
    {
        $this->lastActivityDate = $lastActivityDate;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getSynonyms()
    {
        return $this->synonyms;
    }

    public function setSynonyms($synonyms)
    {
        $this->synonyms = $synonyms;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
