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

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class CommentSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CommentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Comment');
    }

    function it_extends_resource_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\ResourceAbstract');
    }

    function it_implements_comment_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function its_can_flag_is_mutable()
    {
        $this->setCanFlag(true)->shouldReturn($this);
        $this->isCanFlag()->shouldReturn(true);
    }

    function its_edited_is_mutable()
    {
        $this->setEdited(true)->shouldReturn($this);
        $this->isEdited()->shouldReturn(true);
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(4356564)->shouldReturn($this);
        $this->getPostId()->shouldReturn(4356564);
    }

    function its_is_not_a_valid_post_type()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('invalid-post-type')->shouldReturn($this);
        $this->getPostType()->shouldReturn('question');
    }

    function its_is_post_type_is_mutable()
    {
        $this->setPostType('question')->shouldReturn($this);

        $this->setPostType('answer')->shouldReturn($this);
        $this->getPostType()->shouldReturn('answer');
    }

    function its_reply_to_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setReplyToUser($user)->shouldReturn($this);
        $this->getReplyToUser()->shouldReturn($user);
    }
}
