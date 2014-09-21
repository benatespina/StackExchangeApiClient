<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model;

use PhpSpec\ObjectBehavior;

/**
 * Class FilterSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model
 */
class FilterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Model\Filter');
    }

    function it_implements_filter_interface()
    {
        $this->shouldImplement('BenatEspina\StackExchangeApiClient\Model\Interfaces\FilterInterface');
    }

    function its_filter_is_mutable()
    {
        $this->setFilter('filter-id')->shouldReturn($this);
        $this->getFilter()->shouldReturn('filter-id');
    }

    function its_is_not_a_valid_filter_type()
    {
        $this->setFilterType('safe')->shouldReturn($this);

        $this->setFilterType('invalid-filter-type')->shouldReturn($this);
        $this->getFilterType()->shouldReturn('safe');
    }

    function its_is_filter_type_is_mutable()
    {
        $this->setFilterType('safe')->shouldReturn($this);

        $this->setFilterType('unsafe')->shouldReturn($this);
        $this->getFilterType()->shouldReturn('unsafe');
    }

    function its_included_fields_is_mutable()
    {
        $this->getIncludedFields()->shouldHaveCount(0);

        $this->addIncludedField('write_access');

        $this->getIncludedFields()->shouldHaveCount(1);

        $this->removeIncludedField('write_access');

        $this->getIncludedFields()->shouldHaveCount(0);
    }
}
