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
 * Interface TagSynonymInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface TagSynonymInterface
{
    /**
     * Sets applied count.
     *
     * @param int $appliedCount The applied count
     *
     * @return $this self Object
     */
    public function setAppliedCount($appliedCount);

    /**
     * Gets applied count.
     *
     * @return int
     */
    public function getAppliedCount();

    /**
     * Sets creation date.
     *
     * @param \DateTime $creationDate The creation date
     *
     * @return $this self Object
     */
    public function setCreationDate(\DateTime $creationDate);

    /**
     * Gets creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate();

    /**
     * Sets from tag.
     *
     * @param string $fromTag The from tag
     *
     * @return $this self Object
     */
    public function setFromTag($fromTag);

    /**
     * Gets from tag.
     *
     * @return string
     */
    public function getFromTag();

    /**
     * Sets last applied date.
     *
     * @param \DateTime|null $lastAppliedDate The last applied date
     *
     * @return $this self Object
     */
    public function setLastAppliedDate(\DateTime $lastAppliedDate);

    /**
     * Gets last applied date.
     *
     * @return \DateTime|null
     */
    public function getLastAppliedDate();

    /**
     * Sets to tag.
     *
     * @param string $toTag The to tag
     *
     * @return $this self Object
     */
    public function setToTag($toTag);

    /**
     * Gets to tag.
     *
     * @return string
     */
    public function getToTag();
}
