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
 * The access token model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessToken implements Model
{
    private $accessToken;
    private $accountId;
    private $expiresOnDate;
    private $scope;

    public static function fromProperties(
        $accessToken,
        $accountId,
        \DateTime $expiresOnDate = null,
        array $scope = null
    ) {
        return new self(
            $accessToken,
            $accountId,
            $expiresOnDate,
            $scope
        );
    }

    public static function fromJson(array $data)
    {
        return new self(
            array_key_exists('access_token', $data) ? $data['access_token'] : null,
            array_key_exists('account_id', $data) ? $data['account_id'] : null,
            array_key_exists('expires_on_date', $data) ? new \DateTime('@' . $data['expires_on_date']) : null,
            array_key_exists('scope', $data) ? $data['scope'] : null
        );
    }

    private function __construct(
        $accessToken,
        $accountId,
        \DateTime $expiresOnDate = null,
        array $scope = null
    ) {
        $this->accessToken = $accessToken;
        $this->accountId = $accountId;
        $this->expiresOnDate = $expiresOnDate;
        $this->scope = $scope;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setExpiresOnDate(\DateTime $expiresOnDate)
    {
        $this->expiresOnDate = $expiresOnDate;

        return $this;
    }

    public function getExpiresOnDate()
    {
        return $this->expiresOnDate;
    }

    public function setScope(array $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    public function getScope()
    {
        return $this->scope;
    }
}
