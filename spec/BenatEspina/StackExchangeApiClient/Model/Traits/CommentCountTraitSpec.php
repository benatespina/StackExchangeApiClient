<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class CommentCountTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class CommentCountTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\CommentCountTraitStub');
    }

    function its_comment_count_is_mutable()
    {
        $this->setCommentCount(6)->shouldReturn($this);
        $this->getCommentCount()->shouldReturn(6);
    }

    function its_comments_is_mutable(CommentInterface $comment)
    {
        $this->getComments()->shouldHaveCount(0);

        $this->addComment($comment);

        $this->getComments()->shouldHaveCount(1);

        $this->removeComment($comment);

        $this->getComments()->shouldHaveCount(0);
    }
}
