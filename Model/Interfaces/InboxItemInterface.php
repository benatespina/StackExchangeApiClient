<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\GenericIdInterface;

/**
 * Interface InboxItemInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface InboxItemInterface extends GenericIdInterface
{
    /**
     * Sets comment id.
     *
     * @param int|null $commentId The comment id
     *
     * @return $this self Object
     */
    public function setCommentId($commentId);

    /**
     * Gets comment id.
     *
     * @return int|null
     */
    public function getCommentId();

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
     * Sets is unread.
     *
     * @param boolean $isUnread The isUnread boolean
     *
     * @return $this self Object
     */
    public function setIsUnread($isUnread);

    /**
     * Gets is unread.
     *
     * @return boolean
     */
    public function isUnread();

    /**
     * Sets item type.
     *
     * @param string $itemType The item type that can be 'comment', 'chat_message', 'new_answer', 'careers_message',
     *                         'careers_invitations', 'meta_question', 'post_notice', or 'moderator_message'
     *
     * @return $this self Object
     */
    public function setItemType($itemType);

    /**
     * Gets item type.
     *
     * @return string
     */
    public function getItemType();

    /**
     * Sets link.
     *
     * @param string $link The link
     *
     * @return $this self Object
     */
    public function setLink($link);

    /**
     * Sets site.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface|null $site The site
     *
     * @return $this self Object
     */
    public function setSite(SiteInterface $site);

    /**
     * Gets site.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface|null
     */
    public function getSite();

    /**
     * Sets title.
     *
     * @param string $title The title
     *
     * @return $this self Object
     */
    public function setTitle($title);

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle();
}
