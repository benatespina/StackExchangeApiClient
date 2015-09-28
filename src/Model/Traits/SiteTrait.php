<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface;
use BenatEspina\StackExchangeApiClient\Model\RelatedSite;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait SiteTrait.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
trait SiteTrait
{
    /**
     * An array of related sites.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    protected $relatedSites = [];

    /**
     * Site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'.
     *
     * @var string
     */
    protected $siteState;

    /**
     * Site type that can be 'main_site' or 'meta_site'.
     *
     * @var string
     */
    protected $siteType;

    /**
     * Site url.
     *
     * @var string
     */
    protected $siteUrl;

    /**
     * Adds related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function addRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites[] = $relatedSite;

        return $this;
    }

    /**
     * Removes related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function removeRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites = Util::removeElement($relatedSite, $this->relatedSites);

        return $this;
    }

    /**
     * Gets array of related sites.
     *
     * @return array<\Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    public function getRelatedSites()
    {
        return $this->relatedSites;
    }

    /**
     * Sets site state.
     *
     * @param string $siteState The site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'
     *
     * @return $this self Object
     */
    public function setSiteState($siteState)
    {
        if (Util::coincidesElement(
            $siteState, ['closed_beta', 'linked_meta', 'normal', 'open_beta']
        ) === true
        ) {
            $this->siteState = $siteState;
        }

        return $this;
    }

    /**
     * Gets site state.
     *
     * @return string
     */
    public function getSiteState()
    {
        return $this->siteState;
    }

    /**
     * Sets site type.
     *
     * @param string $siteType The site state that can be 'main_site' or 'meta_site'
     *
     * @return $this self Object
     */
    public function setSiteType($siteType)
    {
        if (Util::coincidesElement($siteType, ['main_site', 'meta_site']) === true) {
            $this->siteType = $siteType;
        }

        return $this;
    }

    /**
     * Gets site type.
     *
     * @return string
     */
    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * Sets site url.
     *
     * @param string $siteUrl The site url
     *
     * @return $this self Object
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * Gets site name.
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource       The resource
     * @param string[]     $stateConstants The array of site state constants
     * @param string[]     $typeConstants  The array of site type constants
     */
    protected function loadSite($resource, $stateConstants, $typeConstants)
    {
        $sites = Util::setIfArrayExists($resource, 'related_sites');
        foreach ($sites as $site) {
            $this->relatedSites[] = new RelatedSite($site);
        }
        $this->siteState = Util::isEqual($resource, 'site_state', $stateConstants);
        $this->siteType = Util::isEqual($resource, 'site_type', $typeConstants);
        $this->siteUrl = Util::setIfStringExists($resource, 'site_url');
    }
}
