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

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AccessToken implements Model
{
    protected $accessToken;
    protected $accountId;
    protected $expiresOnDate;
    protected $scope;

    public static function fromJson(array $data) : self
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

    public function setAccessToken(?string $accessToken) : self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }

    public function setAccountId(?int $accountId) : self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId() : ?int
    {
        return $this->accountId;
    }

    public function setExpiresOnDate(?\DateTimeInterface $expiresOnDate) : self
    {
        $this->expiresOnDate = $expiresOnDate;

        return $this;
    }

    public function getExpiresOnDate() : ?\DateTimeInterface
    {
        return $this->expiresOnDate;
    }

    public function setScope(?array $scope) : self
    {
        $this->scope = $scope;

        return $this;
    }

    public function getScope() : ?array
    {
        return $this->scope;
    }

    public function jsonSerialize() : array
    {
        $result = [
            'account_id'      => $this->getAccountId(),
            'access_token'    => $this->getAccessToken(),
            'expires_on_date' => $this->getExpiresOnDate(),
            'scope'           => $this->getScope(),
        ];

        foreach ($result as $key => $element) {
            if (null === $element) {
                unset($result[$key]);
            }
        }

        return $result;
    }
}
