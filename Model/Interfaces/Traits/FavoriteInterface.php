<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface FavoriteInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits
 */
interface FavoriteInterface
{
    /**
     * Sets number of favorites.
     *
     * @param int $favoriteCount The number of favorites
     *
     * @return $this self Object
     */
    public function setFavoriteCount($favoriteCount);

    /**
     * Gets number of favorites.
     *
     * @return int
     */
    public function getFavoriteCount();

    /**
     * Sets is favorited.
     *
     * @param boolean $favorited The favorited boolean
     *
     * @return $this self Object
     */
    public function setFavorited($favorited);

    /**
     * Gets is favorited.
     *
     * @return boolean
     */
    public function isFavorited();
}
