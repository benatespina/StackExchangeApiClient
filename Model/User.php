<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface;

/**
 * Class User.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class User implements UserInterface
{
    /**
     * User id.
     *
     * @var integer
     */
    protected $userId;

    /**
     * Reputation.
     *
     * @var integer
     */
    protected $reputation;

    /**
     * User type.
     *
     * @var string
     */
    protected $userType;

    /**
     * Accept rate.
     *
     * @var integer
     */
    protected $acceptRate;

    /**
     * Url of profile image.
     *
     * @var string
     */
    protected $profileImage;

    /**
     * Name that is displayed in the site.
     *
     * @var string
     */
    protected $displayName;

    /**
     * Url of user profile.
     *
     * @var string
     */
    protected $link;

    /**
     * Constructor.
     *
     * @param null|array $json The json string being decoded
     */
    public function __construct($json = null)
    {
        if ($json !== null) {
            $this->userId = $json['user_id'];
            $this->reputation = $json['reputation'];
            $this->userType = $json['user_type'];
            $this->profileImage = $json['profile_image'];
            $this->displayName = $json['display_name'];
            $this->link = $json['link'];

            if (isset($json['accept_rate']) === true) {
                $this->acceptRate = $json['accept_rate'];
            }
        }
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
        $this->userType = $userType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUserType()
    {
        return $this->userType;
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
}
