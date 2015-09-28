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
 * Spec file of BadgeAPI class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class BadgeAPISpec extends ObjectBehavior
{
    /**
     * Response that is return the methods of the BadgeAPI.
     *
     * @var (string|bool|int)[]
     */
    private $response = ['items' => [
        [
            'user'        => null,
            'award_count' => 12935,
            'badge_id'    => 83,
            'badge_type'  => 'named',
            'description' => 'Visited the site each day for 100 consecutive days. (Days are counted in UTC.).',
            'link'        => 'http://stackoverflow.com/help/badges/83/fanatic',
            'name'        => 'Fanatic',
            'rank'        => 'gold',
        ],
        [
            'user'        => null,
            'award_count' => 443605,
            'badge_id'    => 13,
            'badge_type'  => 'named',
            'description' => 'Active member for a year, earning at least 200 reputation. This badge can be awarded multiple times.',
            'link'        => 'http://stackoverflow.com/help/badges/13/yearling',
            'name'        => 'Yearling',
            'rank'        => 'silver',
        ],
    ]];

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
        $client->get('/badges', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadges(['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])->shouldBeArray();
    }

    function it_gets_badges_by_ids(Client $client)
    {
        $client->get('/badges/13;83', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadgesByIds(['13', '83'])->shouldBeArray();
    }

    function it_gets_named_badges(Client $client)
    {
        $client->get('/badges/name', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getNamedBadges(['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])->shouldBeArray();
    }

    function it_gets_recipient_badges(Client $client)
    {
        $client->get('/badges/recipients', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getRecipientBadges(['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])->shouldBeArray();
    }

    function it_gets_recipient_badges_by_ids(Client $client)
    {
        $client->get('/badges/13;83/recipients', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getRecipientBadgesByIds(['13', '83'])->shouldBeArray();
    }

    function it_gets_tag_based_badges(Client $client)
    {
        $client->get('/badges/tags', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getTagBasedBadges(['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])->shouldBeArray();
    }

    function it_gets_badges_by_users(Client $client)
    {
        $client->get('/users/2359967/badges', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getBadgesByUsers(['2359967'])->shouldBeArray();
    }

    function it_gets_my_badges(Client $client)
    {
        $client->get('/me/badges', ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyBadges()->shouldBeArray();
    }
}
