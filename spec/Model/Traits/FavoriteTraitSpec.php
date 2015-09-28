<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use PhpSpec\ObjectBehavior;

/**
 * Class FavoriteTraitSpec.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
