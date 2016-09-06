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
 * The shallow user model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ShallowUser implements Model
{
    const USER_TYPES = ['does_not_exist', 'moderator', 'registered', 'unregistered'];

    protected $id;
    protected $acceptRate;
    protected $badgeCounts;
    protected $displayName;
    protected $link;
    protected $profileImage;
    protected $reputation;
    protected $userType;

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setId(array_key_exists('user_id', $data) ? $data['user_id'] : null)
            ->setBadgeCounts(
                array_key_exists('badge_counts', $data)
                    ? BadgeCount::fromJson($data['badge_counts'])
                    : null
            )
            ->setAcceptRate(array_key_exists('accept_rate', $data) ? $data['accept_rate'] : null)
            ->setDisplayName(array_key_exists('display_name', $data) ? $data['display_name'] : null)
            ->setLink(array_key_exists('link', $data) ? $data['link'] : null)
            ->setProfileImage(array_key_exists('profile_image', $data) ? $data['profile_image'] : null)
            ->setReputation(array_key_exists('reputation', $data) ? $data['reputation'] : null)
            ->setReputation(array_key_exists('user_type', $data) ? $data['user_type'] : null);

        return $instance;
    }

    public static function fromProperties(
        $id,
        BadgeCount $badgeCounts,
        $userType,
        $acceptRate = null,
        $displayName = null,
        $link = null,
        $profileImage = null,
        $reputation = null
    ) {
        return new self(
            $id,
            $acceptRate,
            $badgeCounts,
            $displayName,
            $link,
            $profileImage,
            $reputation,
            $userType
        );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getAcceptRate()
    {
        return $this->acceptRate;
    }

    public function setAcceptRate($acceptRate)
    {
        $this->acceptRate = $acceptRate;

        return $this;
    }

    public function getBadgeCounts()
    {
        return $this->badgeCounts;
    }

    public function setBadgeCounts($badgeCounts)
    {
        $this->badgeCounts = $badgeCounts;

        return $this;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    public function getProfileImage()
    {
        return $this->profileImage;
    }

    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;

        return $this;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    public function getUserType()
    {
        return $this->userType;
    }

    public function setUserType($userType)
    {
        if (in_array($userType, self::USER_TYPES, true)) {
            $this->userType = $userType;
        }

        return $this;
    }
}
