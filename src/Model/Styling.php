<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Styling.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Styling implements StylingInterface
{
    /**
     * Link color.
     *
     * @var string
     */
    protected $linkColor;

    /**
     * Tag foreground color.
     *
     * @var string
     */
    protected $tagForegroundColor;

    /**
     * Tag background color.
     *
     * @var string
     */
    protected $tagBackgroundColor;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->linkColor = Util::setIfStringExists($json, 'link_color');
        $this->tagForegroundColor = Util::setIfStringExists($json, 'tag_foreground_color');
        $this->tagBackgroundColor = Util::setIfStringExists($json, 'tag_background_color');
    }

    /**
     * {@inheritdoc}
     */
    public function setLinkColor($linkColor)
    {
        $this->linkColor = $linkColor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkColor()
    {
        return $this->linkColor;
    }

    /**
     * {@inheritdoc}
     */
    public function setTagBackgroundColor($tagBackgroundColor)
    {
        $this->tagBackgroundColor = $tagBackgroundColor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTagBackgroundColor()
    {
        return $this->tagBackgroundColor;
    }

    /**
     * {@inheritdoc}
     */
    public function setTagForegroundColor($tagForegroundColor)
    {
        $this->tagForegroundColor = $tagForegroundColor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTagForegroundColor()
    {
        return $this->tagForegroundColor;
    }
}
