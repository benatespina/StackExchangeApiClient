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
 * Class NetworkPostSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SuggestedEditSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\SuggestedEdit');
    }

    function it_extends_base_2_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract');
    }

    function it_implements_suggested_edit_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\SuggestedEditInterface');
    }

    function its_approval_date_is_mutable()
    {
        $approvalDate = new \DateTime('@' . 1409845665);

        $this->setApprovalDate($approvalDate)->shouldReturn($this);
        $this->getApprovalDate()->shouldReturn($approvalDate);
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

    function its_proposing_user_is_mutable(ShallowUserInterface $proposingUser)
    {
        $this->setProposingUser($proposingUser)->shouldReturn($this);
        $this->getProposingUser()->shouldReturn($proposingUser);
    }

    function its_rejection_date_is_mutable()
    {
        $rejectionDate = new \DateTime('@' . 1409845665);

        $this->setRejectionDate($rejectionDate)->shouldReturn($this);
        $this->getRejectionDate()->shouldReturn($rejectionDate);
    }

    function its_suggested_edit_id_is_mutable()
    {
        $this->setSuggestedEditId(3564656)->shouldReturn($this);
        $this->getSuggestedEditId()->shouldReturn(3564656);
    }
}
