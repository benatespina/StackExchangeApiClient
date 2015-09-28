<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class RelatedSite.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->apiSiteParameter = Util::setIfStringExists($json, 'api_site_parameter');
        $this->name = Util::setIfStringExists($json, 'name');
        $this->relation = Util::isEqual(
            $json, 'relation', [self::RELATION_CHAT, self::RELATION_META, self::RELATION_PARENT]
        );
        $this->siteUrl = Util::setIfStringExists($json, 'site_url');
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
            [self::RELATION_CHAT, self::RELATION_META, self::RELATION_PARENT]
        ) === true
        ) {
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
