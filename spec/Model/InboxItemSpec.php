<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class InboxItemSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class InboxItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\InboxItem');
    }

    function it_implements_inbox_item_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\InboxItemInterface');
    }

    function its_comment_id_is_mutable()
    {
        $this->setCommentId(345546)->shouldReturn($this);
        $this->getCommentId()->shouldReturn(345546);
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime('@' . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_is_unread_is_mutable()
    {
        $this->setUnread(true)->shouldReturn($this);
        $this->isUnread()->shouldReturn(true);
    }

    function its_is_not_a_valid_item_type()
    {
        $this->setItemType('comment')->shouldReturn($this);

        $this->setItemType('invalid-item-type')->shouldReturn($this);
        $this->getItemType()->shouldReturn('comment');
    }

    function its_is_item_type_is_mutable()
    {
        $this->setItemType('comment')->shouldReturn($this);

        $this->setItemType('chat_message')->shouldReturn($this);
        $this->getItemType()->shouldReturn('chat_message');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }

    function its_site_is_mutable(SiteInterface $site)
    {
        $this->setSite($site)->shouldReturn($this);
        $this->getSite()->shouldReturn($site);
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->getTitle()->shouldReturn('The title');
    }
}
