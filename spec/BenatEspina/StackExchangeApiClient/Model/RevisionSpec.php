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
 * Class RevisionSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class RevisionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Revision');
    }

    function it_extends_base_2_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract');
    }

    function it_implements_revision_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\RevisionInterface');
    }

    function its_body_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_comment_is_mutable()
    {
        $this->setComment('The comment')->shouldReturn($this);
        $this->getComment()->shouldReturn('The comment');
    }

    function its_roll_back_is_mutable()
    {
        $this->setRollback(true)->shouldReturn($this);
        $this->isRollback()->shouldReturn(true);
    }

    function its_post_id_is_mutable()
    {
        $this->setPostId(3564656)->shouldReturn($this);
        $this->getPostId()->shouldReturn(3564656);
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

    function its_community_wiki_is_mutable()
    {
        $this->setCommunityWiki(true)->shouldReturn($this);
        $this->isCommunityWiki()->shouldReturn(true);
    }

    function its_user_is_mutable(ShallowUserInterface $user)
    {
        $this->setUser($user)->shouldReturn($this);
        $this->getUser()->shouldReturn($user);
    }
}
