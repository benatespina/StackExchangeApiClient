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
 * Interface NoticeInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface NoticeInterface
{
    /**
     * Sets body.
     *
     * @param string $body The body
     *
     * @return $this self Object
     */
    public function setBody($body);

    /**
     * Gets body.
     *
     * @return string
     */
    public function getBody();

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
     * Sets owner user id.
     * 
     * @param  int   $ownerUserId The owner user id
     *                             
     * @return $this self Object
     */
    public function setOwnerUserId($ownerUserId);

    /**
     * Gets owner user id.
     * 
     * @return int
     */
    public function getOwnerUserId();
}
