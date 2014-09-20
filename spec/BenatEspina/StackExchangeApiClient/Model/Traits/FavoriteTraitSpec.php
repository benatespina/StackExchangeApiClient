<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class FavoriteTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class FavoriteTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\FavoriteTraitStub');
    }

    function its_favorite_count_is_mutable()
    {
        $this->setFavoriteCount(6)->shouldReturn($this);
        $this->getFavoriteCount()->shouldReturn(6);
    }

    function its_favorited_is_mutable()
    {
        $this->setFavorited(true)->shouldReturn($this);
        $this->isFavorited()->shouldReturn(true);
    }
}
