<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\UrlInterface;

/**
 * Interface SiteInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface SiteInterface extends UrlInterface
{
    /**
     * Adds alias.
     *
     * @param string $alias The alias
     *
     * @return $this self Object
     */
    public function addAlias($alias);

    /**
     * Removes alias.
     *
     * @param string $alias The alias
     *
     * @return $this self Object
     */
    public function removeAlias($alias);

    /**
     * Gets array of aliases.
     *
     * @return string[]|null
     */
    public function getAliases();

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
     * @return string
     */
    public function getApiSiteParameter();

    /**
     * Sets audience.
     *
     * @param string $audience The audience
     *
     * @return string
     */
    public function setAudience($audience);

    /**
     * Gets audience.
     *
     * @return string
     */
    public function getAudience();

    /**
     * Sets closed beta date.
     *
     * @param \DateTime $closedBetaDate The closed beta date.
     *
     * @return $this self Object
     */
    public function setClosedBetaDate(\DateTime $closedBetaDate);

    /**
     * Gets closed beta date.
     *
     * @return \DateTime|null
     */
    public function getClosedBetaDate();

    /**
     * Sets launch date.
     *
     * @param \DateTime $launchDate The launch date.
     *
     * @return $this self Object
     */
    public function setLaunchDate(\DateTime $launchDate);

    /**
     * Gets launch date.
     *
     * @return \DateTime
     */
    public function getLaunchDate();

    /**
     * Adds markdown extension.
     *
     * @param string[] $markdownExtension The markdown extensions that can be MathJax', 'Prettify', 'Balsamiq' or 'jTab'
     *
     * @return $this self Object
     */
    public function addMarkdownExtension($markdownExtension);

    /**
     * Removes markdown extension.
     *
     * @param string[] $markdownExtension The markdown extensions that can be MathJax', 'Prettify', 'Balsamiq' or 'jTab'
     *
     * @return $this self Object
     */
    public function removeMarkdownExtension($markdownExtension);

    /**
     * Gets array of markdown extensions.
     *
     * @return string[]|null
     */
    public function getMarkdownExtensions();

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
     * Sets open beta date.
     *
     * @param \DateTime $openBetaDate The open beta date.
     *
     * @return $this self Object
     */
    public function setOpenBetaDate(\DateTime $openBetaDate);

    /**
     * Gets open beta date.
     *
     * @return \DateTime|null
     */
    public function getOpenBetaDate();

    /**
     * Adds related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function addRelatedSite(RelatedSiteInterface $relatedSite);

    /**
     * Removes related site.
     *
     * @param \Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface $relatedSite The related site
     *
     * @return $this self Object
     */
    public function removeRelatedSite(RelatedSiteInterface $relatedSite);

    /**
     * Gets array of related sites.
     *
     * @return array<\Benatespina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    public function getRelatedSites();

    /**
     * Sets site state.
     *
     * @param string $siteState The site state that can be 'normal', 'closed_beta', 'open_beta', or 'linked_meta'
     *
     * @return $this self Object
     */
    public function setSiteState($siteState);

    /**
     * Gets site state.
     *
     * @return string
     */
    public function getSiteState();

    /**
     * Sets site type.
     *
     * @param string $siteType The site state that can be 'main_site' or 'meta_site'
     *
     * @return $this self Object
     */
    public function setSiteType($siteType);

    /**
     * Gets site type.
     *
     * @return string
     */
    public function getSiteType();

    /**
     * Sets styling.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface $styling The styling object
     *
     * @return $this self Object
     */
    public function setStyling(StylingInterface $styling);

    /**
     * Gets styling.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface
     */
    public function getStyling();

    /**
     * Sets Twitter account.
     *
     * @param string $twitterAccount The Twitter account
     *
     * @return $this self Object
     */
    public function setTwitterAccount($twitterAccount);

    /**
     * Gets Twitter account.
     *
     * @return string|null
     */
    public function getTwitterAccount();
}
