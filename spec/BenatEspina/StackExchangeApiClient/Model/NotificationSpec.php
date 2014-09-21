<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class NotificationSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class NotificationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Notification');
    }

    function it_implements_user_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\NotificationInterface');
    }

    function its_body_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_is_unread_is_mutable()
    {
        $this->setUnread(true)->shouldReturn($this);
        $this->isUnread()->shouldReturn(true);
    }

    function its_is_not_a_valid_notification_type()
    {
        $this->setNotificationType('generic')->shouldReturn($this);

        $this->setNotificationType('invalid-notification-type')->shouldReturn($this);
        $this->getNotificationType()->shouldReturn('generic');
    }

    function its_notification_type_is_mutable()
    {
        $this->setNotificationType('generic')->shouldReturn($this);

        $this->setNotificationType('profile_activity')->shouldReturn($this);
        $this->getNotificationType()->shouldReturn('profile_activity');
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(345565)->shouldReturn($this);
        $this->getPostId()->shouldReturn(345565);
    }

    function its_site_is_mutable(SiteInterface $site)
    {
        $this->setSite($site)->shouldReturn($this);
        $this->getSite()->shouldReturn($site);
    }
}
