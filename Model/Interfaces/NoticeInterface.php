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
 * Interface NoticeInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
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
     * @param int $ownerUserId The owner user id
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
