<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Authentication;

/**
 * Interface AuthenticationInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * Gets the access token and the key concatenated as queryStrings.
     *
     * @return string
     */
    public function getAuthAsString();
}
