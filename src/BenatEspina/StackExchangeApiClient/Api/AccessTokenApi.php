<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2016 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Api;

use BenatEspina\StackExchangeApiClient\Http\Http;
use BenatEspina\StackExchangeApiClient\Serializer\AccessTokenSerializer;

/**
 * The access token api class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class AccessTokenApi
{
    const URL = 'access-tokens/';

    /**
     * Immediately expires the access tokens passed.
     *
     * More info: https://api.stackexchange.com/docs/invalidate-access-tokens
     *
     * @param string|array $accessTokens Array which contains the tokens delimited by semicolon, or a simple token
     * @param array        $params       QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool         $serialize    Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function invalidate($accessTokens, array $params = [], $serialize = true)
    {
        $response = Http::instance()->get(
            self::URL . (is_array($accessTokens) ? implode(';', $accessTokens) : $accessTokens) . '/invalidate', $params
        );

        return $serialize === true ? AccessTokenSerializer::instance()->serialize($response) : $response;
    }

    /**
     * Reads the properties for a set of access tokens.
     *
     * More info: https://api.stackexchange.com/docs/read-access-tokens
     *
     * @param string|array $accessTokens Array which contains the tokens delimited by semicolon, or a simple token
     * @param array        $params       QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool         $serialize    Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function getOfToken($accessTokens, array $params = [], $serialize = true)
    {
        $response = Http::instance()->get(
            self::URL . (is_array($accessTokens) ? implode(';', $accessTokens) : $accessTokens), $params
        );

        return $serialize === true ? AccessTokenSerializer::instance()->serialize($response) : $response;
    }

    /**
     * Allows an application to de-authorize itself for a set of users.
     *
     * More info: https://api.stackexchange.com/docs/application-de-authenticate
     *
     * @param string|array $accessTokens Array which contains the tokens delimited by semicolon, or a simple token
     * @param array        $params       QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool         $serialize    Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function deAuthenticate($accessTokens, array $params = [], $serialize = true)
    {
        $response = Http::instance()->get(
            self::URL . (is_array($accessTokens) ? implode(';', $accessTokens) : $accessTokens) . '/de-authenticate', $params
        );

        return $serialize === true ? AccessTokenSerializer::instance()->serialize($response) : $response;
    }
}
