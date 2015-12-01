<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
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
class ShallowUser
{
    const USER_TYPE_DOES_NOT_EXIST = 'does_not_exist';
    const USER_TYPE_MODERATOR = 'moderator';
    const USER_TYPE_REGISTERED = 'registered';
    const USER_TYPE_UNREGISTERED = 'unregistered';

    private $id;
    private $acceptRate;
    private $badgeCount;
    private $displayName;
    private $link;
    private $profileImage;
    private $reputation;
    private $userType;

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('user_id', $data) ? $data['user_id'] : null,
            array_key_exists('accept_rate', $data) ? $data['accept_rate'] : null,
            array_key_exists('badge_count', $data) ? BadgeCount::fromJson($data['badge_count']) : null,
            array_key_exists('display_name', $data) ? $data['display_name'] : null,
            array_key_exists('link', $data) ? $data['link'] : null,
            array_key_exists('profile_image', $data) ? $data['profile_image'] : null,
            array_key_exists('reputation', $data) ? $data['reputation'] : null,
            array_key_exists('user_type', $data) ? $data['user_type'] : null
        );
    }

    public static function fromProperties(
        $id,
        $acceptRate,
        BadgeCount $badgeCount,
        $displayName,
        $link,
        $profileImage,
        $reputation,
        $userType
    ) {
        return new self(
            $id,
            $acceptRate,
            $badgeCount,
            $displayName,
            $link,
            $profileImage,
            $reputation,
            $userType
        );
    }

    private function __construct(
        $id,
        $acceptRate,
        BadgeCount $badgeCount,
        $displayName,
        $link,
        $profileImage,
        $reputation,
        $userType
    ) {
        $this->id = $id;
        $this->acceptRate = $acceptRate;
        $this->badgeCount = $badgeCount;
        $this->displayName = $displayName;
        $this->link = $link;
        $this->profileImage = $profileImage;
        $this->reputation = $reputation;
        $this->setUserType($userType);
    }

    private function setUserType($userType)
    {
        if (in_array($userType, [
            self::USER_TYPE_DOES_NOT_EXIST,
            self::USER_TYPE_MODERATOR,
            self::USER_TYPE_REGISTERED,
            self::USER_TYPE_UNREGISTERED,
        ])) {
            $this->userType = $userType;
        }

        return $this;
    }
}
