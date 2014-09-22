<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Trait UrlTrait.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Traits
 */
trait UrlTrait
{
    /**
     * Favicon url.
     *
     * @var string
     */
    protected $faviconUrl;

    /**
     * High resolution icon url.
     *
     * @var string|null
     */
    protected $highResIconUrl;

    /**
     * Icon url.
     *
     * @var string
     */
    protected $iconUrl;

    /**
     * Logo url.
     *
     * @var string
     */
    protected $logoUrl;

    /**
     * Sets favicon url.
     *
     * @param string $faviconUrl The favicon url
     *
     * @return string
     */
    public function setFaviconUrl($faviconUrl)
    {
        $this->faviconUrl = $faviconUrl;

        return $this;
    }

    /**
     * Gets favicon url.
     *
     * @return string
     */
    public function getFaviconUrl()
    {
        return $this->faviconUrl;
    }

    /**
     * Sets high resolution icon url.
     *
     * @param string $highResIconUrl The high resolution icon url
     *
     * @return string
     */
    public function setHighResolutionIconUrl($highResIconUrl)
    {
        $this->highResIconUrl = $highResIconUrl;

        return $this;
    }

    /**
     * Gets high resolution icon url.
     *
     * @return string|null
     */
    public function getHighResolutionIconUrl()
    {
        return $this->highResIconUrl;
    }

    /**
     * Sets icon url.
     *
     * @param string $iconUrl The icon url
     *
     * @return string
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    /**
     * Gets icon url.
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * Sets logo url.
     *
     * @param string $logoUrl The logo url
     *
     * @return $this self Object
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Gets logo url.
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Loads the variables if the data exist into resource. It works like a constructor.
     *
     * @param null|mixed[] $resource The resource
     *
     * @return void
     */
    protected function loadUrl($resource)
    {
        $this->faviconUrl = Util::setIfStringExists($resource, 'favicon_url');
        $this->highResIconUrl = Util::setIfStringExists($resource, 'high_resolution_icon_url');
        $this->iconUrl = Util::setIfStringExists($resource, 'icon_url');
        $this->logoUrl = Util::setIfStringExists($resource, 'logo_url');
    }
}
