<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\Benatespina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class FilterAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class FilterAPISpec extends ObjectBehavior
{
    /**
     * Array which contains filter objects. It is the return type of methods of filter.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\FilterInterface>
     */
    private $response = array(
        'items' => array(
            array(
                'filter'          => 'filter-1',
                'filter_type'     => 'safe',
                'included_fields' => array('answer.body')
            ),
            array(
                'filter'          => 'filter-2',
                'filter_type'     => 'unsafe',
                'included_fields' => array('answer.body')
            ),
        )
    );

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
        $client->post(
            '/filters/create',
            array('include' => 'answer.body', 'exclude' => 'answer', 'base' => 'default', 'unsafe' => 'false')
        )->shouldBeCalled()->willReturn($this->response);

        $this->postFilter(
            array('include' => 'answer.body', 'exclude' => 'answer', 'base' => 'default', 'unsafe' => 'false')
        )->shouldBeArray();
    }

    function it_gets_filters(Client $client)
    {
        $client->get('/filters/filter-1;filter-2')->shouldBeCalled()->willReturn($this->response);

        $this->getFilters(array('filter-1', 'filter-2'))->shouldBeArray();
    }
}
