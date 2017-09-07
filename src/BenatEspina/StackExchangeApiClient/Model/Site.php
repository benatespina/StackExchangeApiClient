<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

/**
 * The site model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Site implements Model
{
    const SITE_STATES = ['closed_beta', 'linked_meta', 'normal', 'open_beta'];
    const SITE_TYPES = ['main_site', 'meta_site'];

    protected $aliases;
    protected $apiSiteParameter;
    protected $audience;
    protected $launchDate;
    protected $markdownExtensions;
    protected $name;
    protected $styling;
    protected $twitterAccount;
    protected $closedBetaDate;
    protected $openBetaDate;
    protected $relatedSites;
    protected $siteState;
    protected $siteType;
    protected $siteUrl;
    protected $faviconUrl;
    protected $highResIconUrl;
    protected $iconUrl;
    protected $logoUrl;

    public static function fromProperties(
        array $aliases,
        $apiSiteParameter,
        $audience,
        \DateTimeInterface $launchDate,
        array $markdownExtensions,
        $name,
        $styling,
        $twitterAccount,
        $closedBetaDate,
        $openBetaDate,
        array $relatedSites,
        $siteState,
        $siteType,
        $siteUrl,
        $faviconUrl,
        $highResIconUrl,
        $iconUrl,
        $logoUrl
    ) {
        $instance = new self();
        $instance
            ->setAliases($aliases)
            ->setApiSiteParameter($apiSiteParameter)
            ->setAudience($audience)
            ->setLaunchDate($launchDate)
            ->setMarkdownExtensions($markdownExtensions)
            ->setName($name)
            ->setStyling($styling)
            ->setTwitterAccount($twitterAccount)
            ->setClosedBetaDate($closedBetaDate)
            ->setOpenBetaDate($openBetaDate)
            ->setRelatedSites($relatedSites)
            ->setSiteState($siteState)
            ->setSiteType($siteType)
            ->setSiteUrl($siteUrl)
            ->setFaviconUrl($faviconUrl)
            ->setHighResIconUrl($highResIconUrl)
            ->setIconUrl($iconUrl)
            ->setLogoUrl($logoUrl);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $aliases = [];
        if (array_key_exists('aliases', $data) && is_array($data['aliases'])) {
            foreach ($data['aliases'] as $alias) {
                $aliases[] = $alias;
            }
        }
        $markdownExtensions = [];
        if (array_key_exists('markdown_extensions', $data) && is_array($data['markdown_extensions'])) {
            foreach ($data['markdown_extensions'] as $markdownExtension) {
                $markdownExtensions[] = $markdownExtension;
            }
        }
        $relatedSites = [];
        if (array_key_exists('related_sites', $data) && is_array($data['related_sites'])) {
            foreach ($data['related_sites'] as $relatedSite) {
                $relatedSites[] = RelatedSite::fromJson($relatedSite);
            }
        }

        $instance = new self();
        $instance
            ->setAliases($aliases)
            ->setApiSiteParameter(array_key_exists('api_site_parameter', $data) ? $data['api_site_parameter'] : null)
            ->setAudience(array_key_exists('audience', $data) ? $data['audience'] : null)
            ->setLaunchDate(
                array_key_exists('launch_date', $data)
                    ? new \DateTimeImmutable('@' . $data['launch_date'])
                    : null
            )
            ->setMarkdownExtensions($markdownExtensions)
            ->setName(array_key_exists('name', $data) ? $data['name'] : null)
            ->setStyling(array_key_exists('styling', $data) ? $data['styling'] : null)
            ->setTwitterAccount(array_key_exists('twitter_account', $data) ? $data['twitter_account'] : null)
            ->setClosedBetaDate(
                array_key_exists('closed_beta_date', $data)
                    ? new \DateTimeImmutable('@' . $data['closed_beta_date'])
                    : null
            )
            ->setOpenBetaDate(
                array_key_exists('open_beta_date', $data)
                    ? new \DateTimeImmutable('@' . $data['open_beta_date'])
                    : null
            )
            ->setRelatedSites($relatedSites)
            ->setSiteState(array_key_exists('site_state', $data) ? $data['site_state'] : null)
            ->setSiteType(array_key_exists('site_type', $data) ? $data['site_type'] : null)
            ->setSiteUrl(array_key_exists('site_url', $data) ? $data['site_url'] : null)
            ->setFaviconUrl(array_key_exists('favicon_url', $data) ? $data['favicon_url'] : null)
            ->setHighResIconUrl(array_key_exists('high_res_icon_url', $data) ? $data['high_res_icon_url'] : null)
            ->setIconUrl(array_key_exists('icon_url', $data) ? $data['icon_url'] : null)
            ->setLogoUrl(array_key_exists('logo_url', $data) ? $data['logo_url'] : null);

        return $instance;
    }

    public function setAliases(array $aliases = [])
    {
        $this->aliases = $aliases;

        return $this;
    }

    public function getAliases()
    {
        return $this->aliases;
    }

    public function getApiSiteParameter()
    {
        return $this->apiSiteParameter;
    }

    public function setApiSiteParameter($apiSiteParameter)
    {
        $this->apiSiteParameter = $apiSiteParameter;

        return $this;
    }

    public function getAudience()
    {
        return $this->audience;
    }

    public function setAudience($audience)
    {
        $this->audience = $audience;

        return $this;
    }

    public function getLaunchDate()
    {
        return $this->launchDate;
    }

    public function setLaunchDate(\DateTimeInterface $launchDate = null)
    {
        $this->launchDate = $launchDate;

        return $this;
    }

    public function getMarkdownExtensions()
    {
        return $this->markdownExtensions;
    }

    public function setMarkdownExtensions(array $markdownExtensions = [])
    {
        $this->markdownExtensions = $markdownExtensions;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getStyling()
    {
        return $this->styling;
    }

    public function setStyling($styling)
    {
        $this->styling = $styling;

        return $this;
    }

    public function getTwitterAccount()
    {
        return $this->twitterAccount;
    }

    public function setTwitterAccount($twitterAccount)
    {
        $this->twitterAccount = $twitterAccount;

        return $this;
    }

    public function getHighResIconUrl()
    {
        return $this->highResIconUrl;
    }

    public function setHighResIconUrl($highResIconUrl)
    {
        $this->highResIconUrl = $highResIconUrl;

        return $this;
    }

    public function setClosedBetaDate(\DateTimeInterface $closedBetaDate = null)
    {
        $this->closedBetaDate = $closedBetaDate;

        return $this;
    }

    public function getClosedBetaDate()
    {
        return $this->closedBetaDate;
    }

    public function setOpenBetaDate(\DateTimeInterface $openBetaDate = null)
    {
        $this->openBetaDate = $openBetaDate;

        return $this;
    }

    public function getOpenBetaDate()
    {
        return $this->openBetaDate;
    }

    public function setRelatedSites(array $relatedSites = [])
    {
        $this->relatedSites = $relatedSites;

        return $this;
    }

    public function getRelatedSites()
    {
        return $this->relatedSites;
    }

    public function setSiteState($siteState)
    {
        if (in_array($siteState, self::SITE_STATES, true)) {
            $this->siteState = $siteState;
        }

        return $this;
    }

    public function getSiteState()
    {
        return $this->siteState;
    }

    public function setSiteType($siteType)
    {
        if (in_array($siteType, self::SITE_TYPES, true)) {
            $this->siteType = $siteType;
        }

        return $this;
    }

    public function getSiteType()
    {
        return $this->siteType;
    }

    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    public function setFaviconUrl($faviconUrl)
    {
        $this->faviconUrl = $faviconUrl;

        return $this;
    }

    public function getFaviconUrl()
    {
        return $this->faviconUrl;
    }

    public function setHighResolutionIconUrl($highResIconUrl)
    {
        $this->highResIconUrl = $highResIconUrl;

        return $this;
    }

    public function getHighResolutionIconUrl()
    {
        return $this->highResIconUrl;
    }

    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    public function getLogoUrl()
    {
        return $this->logoUrl;
    }
}
