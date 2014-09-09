<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\AccessTokenInterface;
use BenatEspina\StackExchangeApiClient\Util\Utilities;

/**
 * Class AccessToken.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
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
     * @var \DateTime
     */
    protected $expiresOnDate;

    /** Array of scopes.
     *
     * @var string[]
     */
    protected $scope;

    /**
     * Constructor.
     *
     * @param null|array $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->scope = array();

        if ($json !== null) {
            $this->accessToken = $json['access_token'];
            $this->accountId = $json['account_id'];
            $this->expiresOnDate = new \DateTime('@' . $json['expires_on_date']);
            foreach ($json['scope'] as $scope) {
                $this->scope[] = $scope;
            }
        }
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
        $this->scope = Utilities::removeElement($scope, $this->scope);

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
