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
 * Interface RelatedSiteInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface RelatedSiteInterface
{
    /**
     * Sets api site parameter.
     *
     * @param string $apiSiteParameter The api site parameter
     *
     * @return string
     */
    public function setApiSiteParameter($apiSiteParameter);

    /**
     * Gets api site parameter.
     *
     * @return string|null
     */
    public function getApiSiteParameter();

    /**
     * Sets name.
     *
     * @param string $name The name
     *
     * @return $this self Object
     */
    public function setName($name);

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets relation.
     *
     * @param string $relation The relation that can be 'parent', 'meta' or 'chat'
     *
     * @return $this self Object
     */
    public function setRelation($relation);

    /**
     * Gets relation.
     *
     * @return string
     */
    public function getRelation();

    /**
     * Sets site url.
     *
     * @param string $siteUrl The site url
     *
     * @return $this self Object
     */
    public function setSiteUrl($siteUrl);

    /**
     * Gets site url.
     *
     * @return string
     */
    public function getSiteUrl();
}
