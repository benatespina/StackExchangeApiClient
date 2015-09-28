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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\AccessTokenInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AccessToken.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessToken implements AccessTokenInterface
{
    /**
     * Access token.
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Account id.
     *
     * @var string
     */
    protected $accountId;

    /**
     * Expires on date.
     *
     * @var \DateTime|null
     */
    protected $expiresOnDate;

    /**
     * An array of scopes.
     *
     * @var string[]
     */
    protected $scope;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->accessToken = Util::setIfStringExists($json, 'access_token');
        $this->accountId = Util::setIfStringExists($json, 'account_id');
        $this->expiresOnDate = Util::setIfDateTimeExists($json, 'expires_on_date');
        $this->scope = Util::setIfArrayExists($json, 'scope');
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken()
    {
        return $this->accessToken;
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
    public function setExpiresOnDate(\DateTime $expiresOnDate)
    {
        $this->expiresOnDate = $expiresOnDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiresOnDate()
    {
        return $this->expiresOnDate;
    }

    /**
     * {@inheritdoc}
     */
    public function addScope($scope)
    {
        $this->scope[] = $scope;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeScope($scope)
    {
        $this->scope = Util::removeElement($scope, $this->scope);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScope()
    {
        return $this->scope;
    }
}
