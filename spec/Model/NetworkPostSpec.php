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

use PhpSpec\ObjectBehavior;

/**
 * Class NetworkPostSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class NetworkPostSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\NetworkPost');
    }

    function it_extends_base_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract');
    }

    function it_implements_network_post_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\NetworkPostInterface');
    }

    function its_is_not_a_valid_post_type()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('invalid-post-type')->shouldReturn($this);
        $this->getPostType()->shouldReturn('question');
    }

    function its_post_type_is_mutable()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('answer')->shouldReturn($this);
        $this->getPostType()->shouldReturn('answer');
    }

    function its_score_is_mutable()
    {
        $this->setScore(45)->shouldReturn($this);
        $this->getScore()->shouldReturn(45);
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->gettitle()->shouldReturn('The title');
    }
}
