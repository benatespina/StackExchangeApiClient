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
 * Class OAuth2.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class OAuth2 implements AuthenticationInterface
{
    /**
     * The key that makes requests against the API to receive a higher request quota.
     *
     * @var string
     */
    protected $key;

    /**
     * The client id.
     *
     * @var string
     */
    protected $clientId;

    /**
     * The scope. The scope. Multiple values may be sent in scope by comma or space delimiting them.
     *
     * @var null|string
     */
    protected $scope;

    /**
     * The redirectUri.
     *
     * @var string
     */
    protected $redirectUri = 'https://stackexchange.com/oauth/login_success';

    /**
     * The access token.
     */
    protected $accessToken;

    /**
     * Constructor.
     *
     * @param string      $key         The key that makes requests against the API to receive a higher request quota
     * @param null|string $accessToken The access token
     * @param null|string $clientId    The client id
     * @param null|string $scope       The scope. Multiple values may be sent in scope by comma or space delimiting them
     * @param null|string $redirectUri The redirectUri. By default: https://stackexchange.com/oauth/login_success
     */
    public function __construct($key, $accessToken = null, $clientId = null, $scope = null, $redirectUri = null)
    {
        $this->key = $key;
        $this->accessToken = $accessToken;
        $this->clientId = $clientId;
        $this->scope = $scope;

        if ($redirectUri !== null) {
            $this->redirectUri = $redirectUri;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken()
    {
        if ($this->accessToken === null) {
            //ToDo: generate access_token from the key, client_id, scope and redirect_uri given.
        }

        return $this->accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuth()
    {
        return ['key' => $this->getKey(), 'access_token' => $this->getAccessToken()];
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthAsString()
    {
        return '&access_token=' . $this->accessToken . '&key=' . $this->key;
    }
}
