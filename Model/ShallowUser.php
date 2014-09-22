<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseShallowUser;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class ShallowUser.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class ShallowUser extends BaseShallowUser implements ShallowUserInterface
{
    const USER_TYPE_DOES_NOT_EXIST = 'does_not_exist';
    const USER_TYPE_MODERATOR = 'moderator';
    const USER_TYPE_REGISTERED = 'registered';
    const USER_TYPE_UNREGISTERED = 'unregistered';

    /**
     * Accept rate.
     *
     * @var int|null
     */
    protected $acceptRate;

    /**
     * The total Badges, segregated by rank.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeCountInterface
     */
    protected $badgeCount;

    /**
     * Name that is displayed in the site.
     *
     * @var string|null
     */
    protected $displayName;

    /**
     * Url of user profile.
     *
     * @var string|null
     */
    protected $link;

    /**
     * Url of profile image.
     *
     * @var string|null
     */
    protected $profileImage;

    /**
     * Reputation.
     *
     * @var int|null
     */
    protected $reputation;

    /**
     * User type that can be 'unregistered', 'registered', 'moderator', or 'does_not_exist'.
     *
     * @var string
     */
    protected $userType;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfIntegerExists($json, 'user_id');

        $this->acceptRate = Util::setIfIntegerExists($json, 'accept_rate');
        $this->badgeCount = new BadgeCount(Util::setIfArrayExists($json, 'badge_count'));
        $this->displayName = Util::setIfStringExists($json, 'display_name');
        $this->link = Util::setIfStringExists($json, 'link');
        $this->profileImage = Util::setIfStringExists($json, 'profile_image');
        $this->reputation = Util::setIfIntegerExists($json, 'reputation');
        $this->userType = Util::isEqual(
            $json,
            'user_type',
            array(
                self::USER_TYPE_DOES_NOT_EXIST,
                self::USER_TYPE_MODERATOR,
                self::USER_TYPE_REGISTERED,
                self::USER_TYPE_UNREGISTERED
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setAcceptRate($acceptRate)
    {
        $this->acceptRate = $acceptRate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAcceptRate()
    {
        return $this->acceptRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setBadgeCount(BadgeCountInterface $badgeCount)
    {
        $this->badgeCount = $badgeCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBadgeCount()
    {
        return $this->badgeCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * {@inheritdoc}
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * {@inheritdoc}
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserType($userType)
    {
        if (Util::coincidesElement(
            $userType,
            array(
                self::USER_TYPE_DOES_NOT_EXIST,
                self::USER_TYPE_MODERATOR,
                self::USER_TYPE_REGISTERED,
                self::USER_TYPE_UNREGISTERED
            )
        ) === true
        ) {
            $this->userType = $userType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserType()
    {
        return $this->userType;
    }
}
