<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface StylingInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
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
