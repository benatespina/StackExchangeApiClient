<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits;

/**
 * Interface UrlInterface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface UrlInterface
{
    /**
     * Sets favicon url.
     *
     * @param string $faviconUrl The favicon url
     *
     * @return string
     */
    public function setFaviconUrl($faviconUrl);

    /**
     * Gets favicon url.
     *
     * @return string
     */
    public function getFaviconUrl();

    /**
     * Sets high resolution icon url.
     *
     * @param string $highResIconUrl The high resolution icon url
     *
     * @return string
     */
    public function setHighResolutionIconUrl($highResIconUrl);

    /**
     * Gets high resolution icon url.
     *
     * @return string|null
     */
    public function getHighResolutionIconUrl();

    /**
     * Sets icon url.
     *
     * @param string $iconUrl The icon url
     *
     * @return string
     */
    public function setIconUrl($iconUrl);

    /**
     * Gets icon url.
     *
     * @return string
     */
    public function getIconUrl();

    /**
     * Sets logo url.
     *
     * @param string $logoUrl The logo url
     *
     * @return $this self Object
     */
    public function setLogoUrl($logoUrl);

    /**
     * Gets logo url.
     *
     * @return string
     */
    public function getLogoUrl();
}
