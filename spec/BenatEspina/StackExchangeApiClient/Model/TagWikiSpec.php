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
 * Class TagWikiSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class TagWikiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\TagWiki');
    }

    function it_implements_tag_wiki_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\TagWikiInterface');
    }

    function its_applied_count_is_mutable()
    {
        $this->setBody('The body')->shouldReturn($this);
        $this->getBody()->shouldReturn('The body');
    }

    function its_body_last_edit_date_is_mutable()
    {
        $bodyLastEditDate = new \DateTime("@" . 1409845665);

        $this->setBodyLastEditDate($bodyLastEditDate)->shouldReturn($this);
        $this->getBodyLastEditDate()->shouldReturn($bodyLastEditDate);
    }

    function its_excerpt_is_mutable()
    {
        $this->setExcerpt('excerpt')->shouldReturn($this);
        $this->getExcerpt()->shouldReturn('excerpt');
    }

    function its_last_body_editor_is_mutable(ShallowUserInterface $lastBodyEditor)
    {
        $this->setLastBodyEditor($lastBodyEditor)->shouldReturn($this);
        $this->getLastBodyEditor()->shouldReturn($lastBodyEditor);
    }

    function its_excerpt_last_edit_date_is_mutable()
    {
        $lastExcerptEditDate = new \DateTime("@" . 1409845665);

        $this->setExcerptLastEditDate($lastExcerptEditDate)->shouldReturn($this);
        $this->getExcerptLastEditDate()->shouldReturn($lastExcerptEditDate);
    }

    function its_last_excerpt_editor_is_mutable(ShallowUserInterface $lastExcerptEditor)
    {
        $this->setLastExcerptEditor($lastExcerptEditor)->shouldReturn($this);
        $this->getLastExcerptEditor()->shouldReturn($lastExcerptEditor);
    }

    function its_tag_name_is_mutable()
    {
        $this->setTagName('tag-name')->shouldReturn($this);
        $this->getTagName()->shouldReturn('tag-name');
    }
}
