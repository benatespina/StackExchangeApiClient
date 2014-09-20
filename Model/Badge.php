<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\BaseAbstract as BaseBadge;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Badge.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Badge extends BaseBadge implements BadgeInterface
{
    const BADGE_TYPE_NAMED = 'named';
    const BADGE_TYPE_TAG_BASED = 'tag_based';

    const RANK_GOLD = 'gold';
    const RANK_SILVER = 'silver';
    const RANK_BRONZE = 'bronze';

    /**
     * The award count.
     *
     * @var int
     */
    protected $awardCount;

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
     * The link.
     *
     * @var string
     */
    protected $link;

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
     * The user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->id = Util::setIfExists($json, 'badge_id');

        $this->awardCount = Util::setIfExists($json, 'award_count');
        $this->description = Util::setIfExists($json, 'description');
        $this->name = Util::setIfExists($json, 'name');
        $this->badgeType = Util::isEqual(
            $json, 'badge_type', array(self::BADGE_TYPE_NAMED, self::BADGE_TYPE_TAG_BASED)
        );
        $this->link = Util::setIfExists($json, 'link');
        $this->rank = Util::isEqual(
            $json, 'rank', array(self::RANK_GOLD, self::RANK_BRONZE, self::RANK_SILVER)
        );
        $this->user = new ShallowUser(Util::setIfExists($json, 'user'));
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
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
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
    public function setUser(ShallowUserInterface $user)
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
