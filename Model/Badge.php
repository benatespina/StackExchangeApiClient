<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstractModel;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface;

/**
 * Class Badge.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Badge extends BaseAbstractModel implements BadgeInterface
{
    const BADGE_TYPE_NAMED = 'named';
    const BADGE_TYPE_TAG_BASED = 'tag_based';

    const RANK_GOLD = 'gold';
    const RANK_SILVER = 'silver';
    const RANK_BRONZE = 'bronze';

    /**
     * The award count.
     *
     * @var integer
     */
    protected $awardCount;

    /**
     * The badge id.
     *
     * @var integer
     */
    protected $badgeId;

    /**
     * The badge type that can be 'named' or 'tag_based'.
     *
     * @var string
     */
    protected $badgeType;

    /**
     * The description.
     *
     * @var string
     */
    protected $description;

    /**
     * The name.
     *
     * @var string
     */
    protected $name;

    /**
     * The rank that can be 'gold', 'silver' or 'bronze'.
     *
     * @var string
     */
    protected $rank;

    /**
     * User object.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param null|(int|string|UserInterface)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        if ($json !== null) {
            if (isset($json['award_count']) === true) {
                $this->awardCount = $json['award_count'];
            }
            if (isset($json['badge_id']) === true) {
                $this->badgeId = $json['badge_id'];
            }
            if ($json['badge_type'] === self::BADGE_TYPE_TAG_BASED
                || $json['badge_type'] === self::BADGE_TYPE_NAMED
            ) {
                $this->badgeType = $json['badge_type'];
            }
            if (isset($json['description']) === true) {
                $this->description = $json['description'];
            }
            if (isset($json['name']) === true) {
                $this->name = $json['name'];
            }
            if ($json['rank'] === self::RANK_BRONZE
                || $json['rank'] === self::RANK_SILVER
                || $json['rank'] === self::RANK_GOLD
            ) {
                $this->rank = $json['rank'];
            }
            if (isset($json['rank']) === true) {
                $this->rank = $json['rank'];
            }
            if (isset($json['user']) === true) {
                $this->user = new User($json['user']);
            }
            parent::__construct($json);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function setAwardCount($awardCount)
    {
        $this->awardCount = $awardCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAwardCount()
    {
        return $this->awardCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setBadgeId($badgeId)
    {
        $this->badgeId = $badgeId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBadgeId()
    {
        return $this->badgeId;
    }

    /**
     * {@inheritdoc}
     */
    public function setBadgeType($badgeType)
    {
        $this->badgeType = $badgeType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBadgeType()
    {
        return $this->badgeType;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }
}
