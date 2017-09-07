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

namespace BenatEspina\StackExchangeApiClient\Authentication;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class Authentication
{
    private $key;
    private $accessToken;

    public function __construct(string $key, string $accessToken)
    {
        $this->key = $key;
        $this->accessToken = $accessToken;
    }

    public function key() : string
    {
        return $this->key;
    }

    public function accessToken() : string
    {
        return $this->accessToken;
    }

    public function toArray() : array
    {
        return ['key' => $this->key, 'access_token' => $this->accessToken];
    }

    public function toUrl() : string
    {
        return '&access_token=' . $this->accessToken . '&key=' . $this->key;
    }
}
