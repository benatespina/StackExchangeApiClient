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

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseNetworkUser;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\CountTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\TopTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class NetworkUser.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkUser extends BaseNetworkUser implements NetworkUserInterface
{
    use CountTrait,
        TopTrait;

    const USER_TYPE_DOES_NOT_EXIST = 'does_not_exist';
    const USER_TYPE_MODERATOR = 'moderator';
    const USER_TYPE_REGISTERED = 'registered';
    const USER_TYPE_UNREGISTERED = 'unregistered';

    /**
     * Account id.
     *
     * @var int
     */
    protected $accountId;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Last access date.
     *
     * @var \DateTime
     */
    protected $lastAccessDate;

    /**
     * Reputation.
     *
     * @var int
     */
    protected $reputation;

    /**
     * Site name.
     *
     * @var string
     */
    protected $siteName;

    /**
     * Site url.
     *
     * @var string
     */
    protected $siteUrl;

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

        $this->loadCount($json);
        $this->loadTop($json);

        $this->accountId = Util::setIfIntegerExists($json, 'account_id');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->lastAccessDate = Util::setIfDateTimeExists($json, 'last_access_date');
        $this->reputation = Util::setIfIntegerExists($json, 'reputation');
        $this->siteName = Util::setIfStringExists($json, 'site_name');
        $this->siteUrl = Util::setIfStringExists($json, 'site_url');

        $this->userType = Util::isEqual(
            $json,
            'user_type',
            [
                self::USER_TYPE_DOES_NOT_EXIST,
                self::USER_TYPE_MODERATOR,
                self::USER_TYPE_REGISTERED,
                self::USER_TYPE_UNREGISTERED,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastAccessDate(\DateTime $lastAccessDate)
    {
        $this->lastAccessDate = $lastAccessDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastAccessDate()
    {
        return $this->lastAccessDate;
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
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * {@inheritdoc}
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function setUserType($userType)
    {
        if (Util::coincidesElement(
            $userType,
            [
                self::USER_TYPE_DOES_NOT_EXIST,
                self::USER_TYPE_MODERATOR,
                self::USER_TYPE_REGISTERED,
                self::USER_TYPE_UNREGISTERED,
            ]
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
