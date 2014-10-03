<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class BadgeAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class BadgeAPISpec extends ObjectBehavior
{
    /**
     * Response that is return the methods of the BadgeAPI.
     *
     * @var (string|boolean|int)[]
     */
    private $response = array(
        'items' => array(
            array(
                'user'        => null,
                'award_count' => 12935,
                'badge_id'    => 83,
                'badge_type'  => 'named',
                'description' => 'Visited the site each day for 100 consecutive days. (Days are counted in UTC.).',
                'link'        => 'http://stackoverflow.com/help/badges/83/fanatic',
                'name'        => 'Fanatic',
                'rank'        => 'gold'
            ),
            array(
                'user'        => null,
                'award_count' => 443605,
                'badge_id'    => 13,
                'badge_type'  => 'named',
                'description' => 'Active member for a year, earning at least 200 reputation. This badge can be awarded multiple times.',
                'link'        => 'http://stackoverflow.com/help/badges/13/yearling',
                'name'        => 'Yearling',
                'rank'        => 'silver'
            )
        )
    );

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\BadgeAPI');
    }

    function it_gets_badges(Client $client)
    {
        $client->get('/badges', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadges(array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))->shouldBeArray();
    }

    function it_gets_badges_by_ids(Client $client)
    {
        $client->get('/badges/13;83', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadgesByIds(array('13', '83'))->shouldBeArray();
    }
    
    function it_gets_named_badges(Client $client)
    {
        $client->get('/badges/name', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);
        
        $this->getNamedBadges(array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))->shouldBeArray();
    }
    
    function it_gets_recipient_badges(Client $client)
    {
        $client->get('/badges/recipients', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getRecipientBadges(array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeArray();
    }

    function it_gets_recipient_badges_by_ids(Client $client)
    {
        $client->get('/badges/13;83/recipients', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getRecipientBadgesByIds(array('13', '83'))->shouldBeArray();
    }

    function it_gets_tag_based_badges(Client $client)
    {
        $client->get('/badges/tags', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getTagBasedBadges(array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeArray();
    }

    function it_gets_badges_by_users(Client $client)
    {
        $client->get('/users/2359967/badges', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadgesByUsers(array('2359967'))->shouldBeArray();
    }

    function it_gets_my_badges(Client $client)
    {
        $client->get('/me/badges', array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyBadges()->shouldBeArray();
    }
}
