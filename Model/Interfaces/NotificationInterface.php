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
 * Interface NotificationInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface NotificationInterface
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
     * Sets is unread.
     *
     * @param boolean $isUnread The isUnread boolean
     *
     * @return $this self Object
     */
    public function setUnread($isUnread);

    /**
     * Gets is unread.
     *
     * @return boolean
     */
    public function isUnread();

    /**
     * Sets notification type.
     *
     * @param string $notificationType The notification type that can be 'generic', 'profile_activity',
     *                                 'bounty_expired', 'bounty_expires_in_one_day', 'badge_earned',
     *                                 'bounty_expires_in_three_days', 'reputation_bonus', 'accounts_associated',
     *                                 'new_privilege', 'post_migrated', 'moderator_message', 'registration_reminder',
     *                                 'edit_suggested', 'substantive_edit', or 'bounty_grace_period_started'
     *
     * @return $this self Object
     */
    public function setNotificationType($notificationType);

    /**
     * Gets notification type.
     *
     * @return string
     */
    public function getNotificationType();

    /**
     * Sets post id.
     *
     * @param int|null $postId The post id
     *
     * @return $this self Object
     */
    public function setPostId($postId);

    /**
     * Gets post id.
     *
     * @return int|null
     */
    public function getPostId();

    /**
     * Sets site.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface $site The site
     *
     * @return $this self Object
     */
    public function setSite(SiteInterface $site);

    /**
     * Gets site.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface
     */
    public function getSite();
}
