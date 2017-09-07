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

namespace BenatEspina\StackExchangeApiClient\Http;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface HttpClient
{
    public const BASE_URL = 'https://api.stackexchange.com/2.2';
    public const FILTER_ALL = '!*KKtQAaxTFOmbVzM';

    public function get(string $url, array $parameters);

    public function post(string $url, array $parameters);

    public function put(string $url, array $parameters);

    public function delete(string $url, array $parameters);
}
