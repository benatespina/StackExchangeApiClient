<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
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
    protected $accessToken;
    protected $accountId;
    protected $expiresOnDate;
    protected $scope;

    public static function fromProperties(
        $accessToken,
        $accountId,
        \DateTimeInterface $expiresOnDate = null,
        array $scope = null
    ) {
        $instance = new self();
        $instance
            ->setAccessToken($accessToken)
            ->setAccountId($accountId)
            ->setExpiresOnDate($expiresOnDate)
            ->setScope($scope);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setAccessToken(array_key_exists('access_token', $data) ? $data['access_token'] : null)
            ->setAccountId(array_key_exists('account_id', $data) ? $data['account_id'] : null)
            ->setExpiresOnDate(
                array_key_exists('expires_on_date', $data)
                    ? new \DateTimeImmutable('@' . $data['expires_on_date'])
                    : null
            )
            ->setScope(array_key_exists('scope', $data) ? $data['scope'] : null);

        return $instance;
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

    public function setExpiresOnDate(\DateTimeInterface $expiresOnDate = null)
    {
        $this->expiresOnDate = $expiresOnDate;

        return $this;
    }

    public function getExpiresOnDate()
    {
        return $this->expiresOnDate;
    }

    public function setScope(array $scope = null)
    {
        $this->scope = $scope;

        return $this;
    }

    public function getScope()
    {
        return $this->scope;
    }
}
