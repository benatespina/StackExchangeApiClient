<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class FlagOptionSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class FlagOptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\FlagOption');
    }

    function it_flag_option_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\FlagOptionInterface');
    }

    function its_count_is_mutable()
    {
        $this->setCount(5)->shouldReturn($this);
        $this->getCount()->shouldReturn(5);
    }

    function its_description_is_mutable()
    {
        $this->setDescription('Flag option description')->shouldReturn($this);
        $this->getDescription()->shouldReturn('Flag option description');
    }

    function its_dialog_title_is_mutable()
    {
        $this->setDialogTitle('The dialog title')->shouldReturn($this);
        $this->getDialogTitle()->shouldReturn('The dialog title');
    }

    function its_has_flagged_is_mutable()
    {
        $this->setHasFlagged(true)->shouldReturn($this);
        $this->hasFlagged()->shouldReturn(true);
    }

    function its_option_id_is_mutable()
    {
        $this->setOptionId('The option id')->shouldReturn($this);
        $this->getOptionId()->shouldReturn('The option id');
    }

    function its_sub_ptions_is_mutable(FlagOptionInterface $subOption)
    {
        $this->getSubOptions()->shouldHaveCount(0);

        $this->addSubOption($subOption);

        $this->getSubOptions()->shouldHaveCount(1);

        $this->removeSubOption($subOption);

        $this->getSubOptions()->shouldHaveCount(0);
    }

    function its_title_is_mutable()
    {
        $this->setTitle('The title')->shouldReturn($this);
        $this->getTitle()->shouldReturn('The title');
    }
}
