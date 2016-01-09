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

use BenatEspina\StackExchangeApiClient\Authentication\Authentication;
use BenatEspina\StackExchangeApiClient\Http\Http;
use BenatEspina\StackExchangeApiClient\Model\User;
use BenatEspina\StackExchangeApiClient\Serializer\UserSerializer;

/**
 * The user api class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class UserApi
{
    const URL = 'users/';
    const QUERY_PARAMS = [
        'order'  => 'desc',
        'sort'   => 'reputation',
        'site'   => 'stackoverflow',
        'filter' => Http::FILTER_ALL,
    ];

    /**
     * The authentication.
     *
     * @var Authentication|null
     */
    private $authentication;

    /**
     * Constructor.
     *
     * @param Authentication|null $anAuthentication The authentication
     */
    public function __construct(Authentication $anAuthentication = null)
    {
        $this->authentication = $anAuthentication;
    }

    /**
     * Returns all users on a site.
     *
     * More info: https://api.stackexchange.com/docs/users
     *
     * @param array $params    QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function all($params = [], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL, $params
        );

        return $serialize === true ? UserSerializer::serialize($response) : $response;
    }

    /**
     * Gets the users identified in ids in {ids}.
     *
     * More info: https://api.stackexchange.com/docs/users-by-ids
     *
     * @param string|array $ids       Array which contains the ids delimited by semicolon, or a simple id
     * @param array        $params    QueryString parameter(s)
     * @param bool         $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array|User
     */
    public function getOfIds($ids, array $params = [], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL . (is_array($ids) ? implode(';', $ids) : $ids), $params
        );

        return $serialize === true ? UserSerializer::serialize($response) : $response;
    }

    /**
     * Returns the user associated with the passed access_token.
     *
     * More info: https://api.stackexchange.com/docs/me
     *
     * @param array $params    QueryString parameter(s)
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @throws \Exception when the auth is null
     *
     * @return User
     */
    public function me(array $params = self::QUERY_PARAMS, $serialize = true)
    {
        if (!$this->authentication instanceof Authentication) {
            throw new \Exception('Authentication is required');
        }
        $response = Http::instance()->get(
            'me', array_merge($params, $this->authentication->toArray())
        );

        return $serialize === true ? UserSerializer::serialize($response) : $response;
    }

    /**
     * Gets those users on a site who can exercise moderation powers.
     *
     * More info: https://api.stackexchange.com/docs/moderators
     *
     * @param array $params    QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function moderators(array $params = [], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL . 'moderators', $params
        );

        return $serialize === true ? UserSerializer::serialize($response) : $response;
    }

    /**
     * Returns those users on a site who both have moderator powers, and were actually elected.
     *
     * More info: https://api.stackexchange.com/docs/elected-moderators
     *
     * @param array $params    QueryString parameter(s), it admits page and pagesize; by default is null
     * @param bool  $serialize Checks if the result will be serialize or not, by default is true
     *
     * @return array
     */
    public function electedModerators(array $params = [], $serialize = true)
    {
        if ($this->authentication instanceof Authentication) {
            if (true === empty($params)) {
                $params = array_merge($params, self::QUERY_PARAMS);
            }
            $params = array_merge($params, $this->authentication->toArray());
        }
        $response = Http::instance()->get(
            self::URL . 'moderators/elected', $params
        );

        return $serialize === true ? UserSerializer::serialize($response) : $response;
    }
}
