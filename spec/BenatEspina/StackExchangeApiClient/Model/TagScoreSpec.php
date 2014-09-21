<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class TagScoreSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class TagScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\TagScore');
    }

    function it_implements_tag_score_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\TagScoreInterface');
    }

    function its_post_count_is_mutable()
    {
        $this->setPostCount(20)->shouldReturn($this);
        $this->getPostCount()->shouldReturn(20);
    }

    function its_score_is_mutable()
    {
        $this->setScore(25)->shouldReturn($this);
        $this->getScore()->shouldReturn(25);
    }

    function its_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setUser($user)->shouldReturn($this);
        $this->getUser()->shouldReturn($user);
    }
}
