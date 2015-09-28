<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface FavoriteInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * @param bool $favorited The favorited boolean
     *
     * @return $this self Object
     */
    public function setFavorited($favorited);

    /**
     * Gets is favorited.
     *
     * @return bool
     */
    public function isFavorited();
}
