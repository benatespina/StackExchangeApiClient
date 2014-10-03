<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Authentication;

/**
 * Interface AuthenticationInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Authentication
 */
interface AuthenticationInterface
{
    /**
     * Gets the access token string.
     *
     * @return string
     */
    public function getAccessToken();

    /**
     * Gets the key.
     *
     * @return string
     */
    public function getKey();

    /**
     * Gets the access token and the key parsed by array of strings.
     *
     * @return string[]
     */
    public function getAuth();

    /**
     * Gets the access token and the key concatenated as queryStrings
     *
     * @return string
     */
    public function getAuthAsString();
}
