<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait FavoriteTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait FavoriteTrait
{
    /**
     * Number of favorite votes.
     *
     * @var int
     */
    protected $favoriteCount;

    /**
     * Boolean that shows it it is favorited or not.
     *
     * @var boolean.
     */
    protected $favorited;

    /**
     * Sets number of favorites.
     *
     * @param int $favoriteCount The number of favorites
     *
     * @return $this self Object
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;

        return $this;
    }

    /**
     * Gets number of favorites.
     *
     * @return int
     */
    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    /**
     * Sets is favorited.
     *
     * @param bool $favorited The favorited boolean
     *
     * @return $this self Object
     */
    public function setFavorited($favorited)
    {
        $this->favorited = $favorited;

        return $this;
    }

    /**
     * Gets is favorited.
     *
     * @return bool
     */
    public function isFavorited()
    {
        return $this->favorited;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     */
    protected function loadFavorite($resource)
    {
        $this->favoriteCount = Util::setIfIntegerExists($resource, 'favorite_count');
        $this->favorited = Util::setIfBoolExists($resource, 'favorited');
    }
}
