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
 * Class badge model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Badge implements Model
{
    const BADGE_TYPES = ['named', 'tag_based'];
    const RANKS = ['gold', 'silver', 'bronze'];

    protected $id;
    protected $awardCount;
    protected $badgeType;
    protected $description;
    protected $link;
    protected $name;
    protected $rank;
    protected $user;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('badge_id', $data) ? $data['badge_id'] : null)
            ->setAwardCount(array_key_exists('award_count', $data) ? $data['award_count'] : null)
            ->setBadgeType(array_key_exists('badge_type', $data) ? $data['badge_type'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setName(array_key_exists('name', $data) ? $data['name'] : null)
            ->setRank(array_key_exists('rank', $data) ? $data['rank'] : null)
            ->setUser(array_key_exists('user', $data) ? ShallowUser::fromJson($data['user']) : null)
            ->setDescription(array_key_exists('description', $data) ? $data['description'] : null);

        return $instance;
    }

    public static function fromProperties(
        $id,
        $awardCount,
        $badgeType,
        $link,
        $name,
        $rank,
        $user,
        $description = null
    ) {
        $instance = new self();
        $instance
            ->setId($id)
            ->setAwardCount($awardCount)
            ->setBadgeType($badgeType)
            ->setLink($link)
            ->setName($name)
            ->setRank($rank)
            ->setUser($user)
            ->setDescription($description);

        return $instance;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAwardCount($awardCount)
    {
        $this->awardCount = $awardCount;

        return $this;
    }

    public function getAwardCount()
    {
        return $this->awardCount;
    }

    public function setBadgeType($badgeType)
    {
        if (in_array($badgeType, self::BADGE_TYPES, true)) {
            $this->badgeType = $badgeType;
        }

        return $this;
    }

    public function getBadgeType()
    {
        return $this->badgeType;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRank($rank)
    {
        if (in_array($rank, self::RANKS, true)) {
            $this->rank = $rank;
        }

        return $this;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function setUser(ShallowUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}
