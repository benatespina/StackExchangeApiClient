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
 * Interface StylingInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface StylingInterface
{
    /**
     * Sets link color.
     *
     * @param string $linkColor The link color
     *
     * @return $this self Object
     */
    public function setLinkColor($linkColor);

    /**
     * Gets link color.
     *
     * @return string
     */
    public function getLinkColor();

    /**
     * Sets tag background color.
     *
     * @param string $tagBackgroundColor The tag background color
     *
     * @return $this self Object
     */
    public function setTagBackgroundColor($tagBackgroundColor);

    /**
     * Gets tag background color.
     *
     * @return string
     */
    public function getTagBackgroundColor();

    /**
     * Sets tag foreground color.
     *
     * @param string $tagForegroundColor The tag background color
     *
     * @return $this self Object
     */
    public function setTagForegroundColor($tagForegroundColor);

    /**
     * Gets tag foreground color.
     *
     * @return string
     */
    public function getTagForegroundColor();
}
