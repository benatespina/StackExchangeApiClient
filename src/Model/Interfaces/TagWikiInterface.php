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
 * Interface TagWikiInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface TagWikiInterface
{
    /**
     * Sets body.
     *
     * @param string|null $body The body
     *
     * @return $this self Object
     */
    public function setBody($body);

    /**
     * Gets body.
     *
     * @return string|null
     */
    public function getBody();

    /**
     * Sets body last edit date.
     *
     * @param \DateTime|null $bodyLastEditDate The body last edit date
     *
     * @return $this self Object
     */
    public function setBodyLastEditDate(\DateTime $bodyLastEditDate);

    /**
     * Gets body last edit date.
     *
     * @return \DateTime|null
     */
    public function getBodyLastEditDate();

    /**
     * Sets excerpt.
     *
     * @param string|null $excerpt The excerpt
     *
     * @return $this self Object
     */
    public function setExcerpt($excerpt);

    /**
     * Gets excerpt.
     *
     * @return string|null
     */
    public function getExcerpt();

    /**
     * Sets excerpt last edit date.
     *
     * @param \DateTime|null $excerptLastEditDate The excerpt last edit date
     *
     * @return $this self Object
     */
    public function setExcerptLastEditDate(\DateTime $excerptLastEditDate);

    /**
     * Gets excerpt last edit date.
     *
     * @return \DateTime|null
     */
    public function getExcerptLastEditDate();

    /**
     * Sets last body editor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $lastBodyEditor The last
     *                                                                                                       body editor
     *
     * @return $this self Object
     */
    public function setLastBodyEditor(ShallowUserInterface $lastBodyEditor);

    /**
     * Gets last body editor.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getLastBodyEditor();

    /**
     * Sets last excerpt editor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $lastExcerptEditor The last
     *                                                                                                          excerpt
     *                                                                                                          editor
     *
     * @return $this self Object
     */
    public function setLastExcerptEditor(ShallowUserInterface $lastExcerptEditor);

    /**
     * Gets last excerpt editor.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getLastExcerptEditor();

    /**
     * Sets tag name.
     *
     * @param string $tagName The tag name
     *
     * @return $this self Object
     */
    public function setTagName($tagName);

    /**
     * Gets tag name.
     *
     * @return string
     */
    public function getTagName();
}
