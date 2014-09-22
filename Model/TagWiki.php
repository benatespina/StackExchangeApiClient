<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\TagWikiInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class TagWiki.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class TagWiki implements TagWikiInterface
{
    /**
     * The body.
     *
     * @var string|null
     */
    protected $body;

    /**
     * Body last edit date.
     *
     * @var \DateTime|null
     */
    protected $bodyLastEditDate;

    /**
     * The excerpt.
     *
     * @var string|null
     */
    protected $excerpt;

    /**
     * Excerpt last edit date.
     *
     * @var \DateTime|null
     */
    protected $excerptLastEditDate;

    /**
     * Last body editor.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $lastBodyEditor;

    /**
     * Last excerpt editor.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $lastExcerptEditor;

    /** Tag name.
     *
     * @var string
     */
    protected $tagName;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->body = Util::setIfStringExists($json, 'body');
        $this->bodyLastEditDate = Util::setIfDateTimeExists($json, 'body_last_edit_date');
        $this->excerpt = Util::setIfStringExists($json, 'excerpt');
        $this->excerptLastEditDate = Util::setIfDateTimeExists($json, 'excerpt_last_edit_date');
        $this->lastBodyEditor = new ShallowUser(Util::setIfArrayExists($json, 'last_body_editor'));
        $this->lastExcerptEditor = new ShallowUser(Util::setIfArrayExists($json, 'last_excerpt_editor'));
        $this->tagName = Util::setIfStringExists($json, 'tag_name');
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function setBodyLastEditDate(\DateTime $bodyLastEditDate)
    {
        $this->bodyLastEditDate = $bodyLastEditDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyLastEditDate()
    {
        return $this->bodyLastEditDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * {@inheritdoc}
     */
    public function setExcerptLastEditDate(\DateTime $excerptLastEditDate)
    {
        $this->excerptLastEditDate = $excerptLastEditDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExcerptLastEditDate()
    {
        return $this->excerptLastEditDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastBodyEditor(ShallowUserInterface $lastBodyEditor)
    {
        $this->lastBodyEditor = $lastBodyEditor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastBodyEditor()
    {
        return $this->lastBodyEditor;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastExcerptEditor(ShallowUserInterface $lastExcerptEditor)
    {
        $this->lastExcerptEditor = $lastExcerptEditor;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastExcerptEditor()
    {
        return $this->lastExcerptEditor;
    }

    /**
     * {@inheritdoc}
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTagName()
    {
        return $this->tagName;
    }
}
