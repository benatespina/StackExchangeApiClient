<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Authentication;

/**
 * Authentication class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class Authentication
{
    /**
     * The key that makes requests against the
     * API to receive a higher request quota.
     *
     * @var string
     */
    private $key;

    /**
     * The access token.
     */
    private $accessToken;

    /**
     * Constructor.
     *
     * @param string $aKey          The key
     * @param string $anAccessToken The access token
     */
    public function __construct($aKey, $anAccessToken)
    {
        $this->key = $aKey;
        $this->accessToken = $anAccessToken;
    }

    /**
     * Gets the key.
     *
     * @return string
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * Gets the access token.
     *
     * @return string
     */
    public function accessToken()
    {
        return $this->accessToken;
    }

    /**
     * Gets the key and access token in array format.
     *
     * @return array
     */
    public function toArray()
    {
        return ['key' => $this->key, 'access_token' => $this->accessToken];
    }

    /**
     * Gets the key and access token in url format.
     *
     * @return string
     */
    public function toUrl()
    {
        return '&access_token=' . $this->accessToken . '&key=' . $this->key;
    }
}
