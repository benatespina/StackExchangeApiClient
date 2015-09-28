<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Abstracts;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class AnswerQuestionAbstract.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class AnswerQuestionAbstract extends AnswerPostQuestionAbstract
{
    /**
     * Community owned date.
     *
     * @var \DateTime|null
     */
    protected $communityOwnedDate;

    /**
     * Locked date.
     *
     * @var \DateTime|null
     */
    protected $lockedDate;

    /**
     * Array that contains tags.
     *
     * @var string[]
     */
    protected $tags;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        $this->communityOwnedDate = Util::setIfDateTimeExists($json, 'community_owned_date');
        $this->lockedDate = Util::setIfDateTimeExists($json, 'lockedDate');
        $this->tags = Util::setIfArrayExists($json, 'tags');
    }

    /**
     * Sets community owned date.
     *
     * @param \DateTime $communityOwnedDate The community owned date
     *
     * @return $this self Object
     */
    public function setCommunityOwnedDate($communityOwnedDate)
    {
        $this->communityOwnedDate = $communityOwnedDate;

        return $this;
    }

    /**
     * Gets community owned date.
     *
     * @return \DateTime
     */
    public function getCommunityOwnedDate()
    {
        return $this->communityOwnedDate;
    }

    /**
     * Sets locked date.
     *
     * @param \DateTime|null $lockedDate The locked date
     *
     * @return $this self Object
     */
    public function setLockedDate($lockedDate)
    {
        $this->lockedDate = $lockedDate;

        return $this;
    }

    /**
     * Gets locked date.
     *
     * @return \DateTime|null
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * Adds tag.
     *
     * @param string $tag The tag
     *
     * @return $this self Object
     */
    public function addTag($tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Removes tag.
     *
     * @param string $tag The tag
     *
     * @return $this self Object
     */
    public function removeTag($tag)
    {
        $this->tags = Util::removeElement($tag, $this->tags);

        return $this;
    }

    /**
     * Gets array of tags.
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }
}
