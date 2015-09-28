<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface PostInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface PostInterface
{
    /**
     * Sets post type.
     *
     * @param int $postType The post type that can be 'question' or 'answer'
     *
     * @return $this self Object
     */
    public function setPostType($postType);

    /**
     * Gets post type.
     *
     * @return int
     */
    public function getPostType();
}
