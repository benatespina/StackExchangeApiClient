<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait FavoriteTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
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
     * @param boolean $favorited The favorited boolean
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
     * @return boolean
     */
    public function isFavorited()
    {
        return $this->favorited;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|(int|string)[] $resource The resource
     *
     * @return void
     */
    protected function loadFavorite($resource)
    {
        $this->favoriteCount = Util::setIfExists($resource, 'favorite_count');
        $this->favorited = Util::setIfExists($resource, 'favorited');
    }
}
