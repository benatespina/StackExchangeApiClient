<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Abstracts;

use PhpSpec\ObjectBehavior;

/**
 * Class AnswerPostQuestionAbstractSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Abstracts
 */
class AnswerPostQuestionAbstractSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Abstracts\AnswerPostQuestionAbstractStub');
    }

    function its_downvoted_is_mutable()
    {
        $this->setDownvoted(false)->shouldReturn($this);
        $this->isDownvoted()->shouldReturn(false);
    }

    function its_last_activity_date_is_mutable()
    {
        $lastActivityDate = new \DateTime("@" . 1409845665);

        $this->setLastActivityDate($lastActivityDate)->shouldReturn($this);
        $this->getLastActivityDate()->shouldReturn($lastActivityDate);
    }

    function its_share_link_is_mutable()
    {
        $this->setShareLink('http://sharelink.com')->shouldReturn($this);
        $this->getShareLink()->shouldReturn('http://sharelink.com');
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->getTitle()->shouldReturn('The title');
    }
}
