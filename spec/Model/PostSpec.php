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
 * Class PostSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class PostSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Post');
    }

    function it_extends_answer_post_question_abstract()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Abstracts\AnswerPostQuestionAbstract');
    }

    function it_implements_post_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\PostInterface');
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
}
