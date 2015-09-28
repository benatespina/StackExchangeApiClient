<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of FilterAPI class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class FilterAPISpec extends ObjectBehavior
{
    /**
     * Array which contains filter objects. It is the return type of methods of filter.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface>
     */
    private $response = ['items' => [
        [
            'filter'          => 'filter-1',
            'filter_type'     => 'safe',
            'included_fields' => ['answer.body'],
        ],
        [
            'filter'          => 'filter-2',
            'filter_type'     => 'unsafe',
            'included_fields' => ['answer.body'],
        ],
    ]];

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\FilterAPI');
    }

    function it_posts_filter(Client $client)
    {
        $client->post('/filters/create', [
            'include' => 'answer.body',
            'exclude' => 'answer',
            'base'    => 'default',
            'unsafe'  => 'false',
        ])->shouldBeCalled()->willReturn($this->response);

        $this->postFilter([
            'include' => 'answer.body',
            'exclude' => 'answer',
            'base'    => 'default',
            'unsafe'  => 'false',
        ])->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface');
    }

    function it_gets_filters(Client $client)
    {
        $client->get('/filters/filter-1;filter-2')->shouldBeCalled()->willReturn($this->response);

        $this->getFilters(['filter-1', 'filter-2'])->shouldBeArray();
    }
}
