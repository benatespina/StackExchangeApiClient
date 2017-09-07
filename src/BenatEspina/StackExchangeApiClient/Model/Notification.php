<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The notification model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Notification implements Model
{
    const NOTIFICATION_TYPES = [
        'accounts_associated',
        'badge_earned',
        'bounty_expired',
        'bounty_expires_in_one_day',
        'bounty_expires_in_three_days',
        'bounty_period_started',
        'edit_suggested',
        'generic',
        'moderator_message',
        'new_privileges',
        'post_migrated',
        'profile_activity',
        'registration_reminder',
        'reputation_bonus',
        'substantive_edit',
    ];

    protected $body;
    protected $creationDate;
    protected $isUnread;
    protected $notificationType;
    protected $postId;
    protected $site;

    public static function fromProperties(
        $body,
        $creationDate,
        $isUnread,
        $notificationType,
        $postId,
        Site $site
    ) {
        $instance = new self();
        $instance
            ->setBody($body)
            ->setCreationDate($creationDate)
            ->setUnread($isUnread)
            ->setNotificationType($notificationType)
            ->setPostId($postId)
            ->setSite($site);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setBody(array_key_exists('body', $data) ? $data['body'] : null)
            ->setCreationDate(
                array_key_exists('creation_date', $data)
                    ? new \DateTimeImmutable('@' . $data['creation_date'])
                    : null
            )
            ->setUnread(array_key_exists('is_unread', $data) ? $data['is_unread'] : null)
            ->setNotificationType(array_key_exists('notification_type', $data) ? $data['notification_type'] : null)
            ->setPostId(array_key_exists('post_id', $data) ? $data['post_id'] : null)
            ->setSite(array_key_exists('site', $data) ? Site::fromJson($data['site']) : null);

        return $instance;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setCreationDate(\DateTimeInterface $creationDate = null)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setUnread($isUnread)
    {
        $this->isUnread = $isUnread;

        return $this;
    }

    public function isUnread()
    {
        return $this->isUnread;
    }

    public function setNotificationType($notificationType)
    {
        if (in_array($notificationType, self::NOTIFICATION_TYPES, true)) {
            $this->notificationType = $notificationType;
        }

        return $this;
    }

    public function getNotificationType()
    {
        return $this->notificationType;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    public function getPostId()
    {
        return $this->postId;
    }

    public function setSite(Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    public function getSite()
    {
        return $this->site;
    }
}
