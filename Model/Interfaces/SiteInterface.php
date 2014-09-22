<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\BetaDateInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\SiteInterface as SiteTrait;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\UrlInterface;

/**
 * Interface SiteInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface SiteInterface extends BetaDateInterface, SiteTrait, UrlInterface
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
     * @return string[]
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
     * @return string[]
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
