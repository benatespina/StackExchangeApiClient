<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\NotificationInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Notification.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Notification implements NotificationInterface
{
    const NOTIFICATION_TYPE_ACCOUNTS_ASSOCIATED = 'accounts_associated';
    const NOTIFICATION_TYPE_BADGE_EARNED = 'badge_earned';
    const NOTIFICATION_TYPE_BOUNTY_EXPIRED = 'bounty_expired';
    const NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_ONE_DAY = 'bounty_expires_in_one_day';
    const NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_THREE_DAYS = 'bounty_expires_in_three_days';
    const NOTIFICATION_TYPE_BOUNTY_PERIOD_STARTED = 'bounty_period_started';
    const NOTIFICATION_TYPE_EDIT_SUGGESTED = 'edit_suggested';
    const NOTIFICATION_TYPE_GENERIC = 'generic';
    const NOTIFICATION_TYPE_MODERATOR_MESSAGE = 'moderator_message';
    const NOTIFICATION_TYPE_NEW_PRIVILEGE = 'new_privileges';
    const NOTIFICATION_TYPE_POST_MIGRATED = 'post_migrated';
    const NOTIFICATION_TYPE_PROFILE_ACTIVITY = 'profile_activity';
    const NOTIFICATION_TYPE_REGISTRATION_REMINDER = 'registration_reminder';
    const NOTIFICATION_TYPE_REPUTATION_BONUS = 'reputation_bonus';
    const NOTIFICATION_TYPE_SUBSTANTIVE_EDIT = 'substantive_edit';

    /**
     * The body.
     *
     * @var string
     */
    protected $body;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Boolean that shows if inbox item is unread or not.
     *
     * @var boolean
     */
    protected $isUnread;

    /**
     * The notification type that can be 'generic', 'profile_activity','bounty_expired', 'bounty_expires_in_one_day',
     * 'badge_earned', 'bounty_expires_in_three_days', 'reputation_bonus', 'accounts_associated', 'new_privilege',
     * 'post_migrated', 'moderator_message', 'registration_reminder', 'edit_suggested', 'substantive_edit', or
     * 'bounty_grace_period_started'
     *
     * @var string
     */
    protected $notificationType;

    /** The post id.
     *
     * @var int|null
     */
    protected $postId;

    /**
     * The site.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface
     */
    protected $site;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->body = Util::setIfExists($json, 'body');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->isUnread = Util::setIfExists($json, 'is_unread');
        $this->notificationType = Util::isEqual(
            $json,
            'notification_type',
            array(
                self::NOTIFICATION_TYPE_ACCOUNTS_ASSOCIATED,
                self::NOTIFICATION_TYPE_BADGE_EARNED,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRED,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_ONE_DAY,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_THREE_DAYS,
                self::NOTIFICATION_TYPE_BOUNTY_PERIOD_STARTED,
                self::NOTIFICATION_TYPE_EDIT_SUGGESTED,
                self::NOTIFICATION_TYPE_GENERIC,
                self::NOTIFICATION_TYPE_MODERATOR_MESSAGE,
                self::NOTIFICATION_TYPE_NEW_PRIVILEGE,
                self::NOTIFICATION_TYPE_POST_MIGRATED,
                self::NOTIFICATION_TYPE_PROFILE_ACTIVITY,
                self::NOTIFICATION_TYPE_REGISTRATION_REMINDER,
                self::NOTIFICATION_TYPE_REPUTATION_BONUS,
                self::NOTIFICATION_TYPE_SUBSTANTIVE_EDIT
            )
        );
        $this->postId = Util::setIfExists($json, 'post_id');
        $this->site = new Site(Util::setIfExists($json, 'site'));
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
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setUnread($isUnread)
    {
        $this->isUnread = $isUnread;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isUnread()
    {
        return $this->isUnread;
    }

    /**
     * {@inheritdoc}
     */
    public function setNotificationType($notificationType)
    {
        if (Util::coincidesElement(
            $notificationType,
            array(
                self::NOTIFICATION_TYPE_ACCOUNTS_ASSOCIATED,
                self::NOTIFICATION_TYPE_BADGE_EARNED,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRED,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_ONE_DAY,
                self::NOTIFICATION_TYPE_BOUNTY_EXPIRES_IN_THREE_DAYS,
                self::NOTIFICATION_TYPE_BOUNTY_PERIOD_STARTED,
                self::NOTIFICATION_TYPE_EDIT_SUGGESTED,
                self::NOTIFICATION_TYPE_GENERIC,
                self::NOTIFICATION_TYPE_MODERATOR_MESSAGE,
                self::NOTIFICATION_TYPE_NEW_PRIVILEGE,
                self::NOTIFICATION_TYPE_POST_MIGRATED,
                self::NOTIFICATION_TYPE_PROFILE_ACTIVITY,
                self::NOTIFICATION_TYPE_REGISTRATION_REMINDER,
                self::NOTIFICATION_TYPE_REPUTATION_BONUS,
                self::NOTIFICATION_TYPE_SUBSTANTIVE_EDIT
            )
        )) {
            $this->notificationType = $notificationType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * {@inheritdoc}
     */
    public function setSite(SiteInterface $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSite()
    {
        return $this->site;
    }
}
