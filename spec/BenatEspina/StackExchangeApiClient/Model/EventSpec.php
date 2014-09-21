<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class EventSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class EventSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Event');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_event_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\EventInterface');
    }

    function its_creation_date_is_mutable()
    {
        $creationDate = new \DateTime("@" . 1409845665);

        $this->setCreationDate($creationDate)->shouldReturn($this);
        $this->getCreationDate()->shouldReturn($creationDate);
    }

    function its_is_not_a_valid_event_type()
    {
        $this->setEventType('question_posted')->shouldReturn($this);

        $this->setEventType('invalid-event-type')->shouldReturn($this);
        $this->getEventType()->shouldReturn('question_posted');
    }

    function its_event_type_is_mutable()
    {
        $this->setEventType('question_posted')->shouldReturn($this);

        $this->setEventType('answer_posted')->shouldReturn($this);
        $this->getEventType()->shouldReturn('answer_posted');
    }

    function its_excerpt_is_mutable()
    {
        $this->setExcerpt('The excerpt')->shouldReturn($this);
        $this->getExcerpt()->shouldReturn('The excerpt');
    }

    function its_link_is_mutable()
    {
        $this->setLink('http://link.com')->shouldReturn($this);
        $this->getLink()->shouldReturn('http://link.com');
    }
}
