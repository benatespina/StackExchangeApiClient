<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class RelatedSite.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class RelatedSite implements RelatedSiteInterface
{
    const RELATION_CHAT = 'chat';
    const RELATION_META = 'meta';
    const RELATION_PARENT = 'parent';

    /**
     * Api site parameter.
     *
     * @var string|null
     */
    protected $apiSiteParameter;

    /**
     * The name.
     *
     * @var string
     */
    protected $name;

    /**
     * Relation type that can be 'chat', 'meta' or 'parent'.
     *
     * @var string
     */
    protected $relation;

    /**
     * Site url.
     *
     * @var string
     */
    protected $siteUrl;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->apiSiteParameter = Util::setIfExists($json, 'api_site_parameter');
        $this->name = Util::setIfExists($json, 'name');
        $this->relation = Util::isEqual(
            $json, 'relation', array(self::RELATION_CHAT, self::RELATION_META, self::RELATION_PARENT)
        );
        $this->siteUrl = Util::setIfExists($json, 'site_url');
    }

    /**
     * {@inheritdoc}
     */
    public function setApiSiteParameter($apiSiteParameter)
    {
        $this->apiSiteParameter = $apiSiteParameter;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApiSiteParameter()
    {
        return $this->apiSiteParameter;
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
    public function setRelation($relation)
    {
        if (Util::coincidesElement(
            $relation,
            array(self::RELATION_CHAT, self::RELATION_META, self::RELATION_PARENT)
        )) {
            $this->relation = $relation;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * {@inheritdoc}
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }
}
