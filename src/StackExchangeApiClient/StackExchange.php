<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2014-2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient;

use BenatEspina\StackExchangeApiClient\Api\AnswerApi;
use BenatEspina\StackExchangeApiClient\Authentication\Authentication;

/**
 * The StackExchange library entry point.
 *
 * You can instantiate the concrete API class, for example the AnswerApi but
 * if you plan to use the different api classes across your project, you could
 * use this facade that offers methods to access to any apis of the library.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class StackExchange
{
    /**
     * The authentication instance.
     *
     * @var Authentication|null
     */
    private $authentication;

    /**
     * Constructor.
     */
    public function __construct(Authentication $anAuthentication = null)
    {
        $this->authentication = $anAuthentication;
    }

    /**
     * Gets the api related with answers.
     *
     * @return AnswerApi
     */
    public function answerApi()
    {
        return new AnswerApi($this->authentication);
    }
}