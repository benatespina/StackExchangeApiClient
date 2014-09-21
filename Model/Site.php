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
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\UrlTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Site.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Site implements SiteInterface
{
    use UrlTrait;

    const SITE_STATE_CLOSED_BETA = 'closed_beta';
    const SITE_STATE_LINKED_META = 'linked_meta';
    const SITE_STATE_NORMAL = 'normal';
    const SITE_STATE_OPEN_BETA_DATE = 'open_beta';

    const SITE_TYPE_MAIN_SITE = 'main_site';
    const SITE_TYPE_META_SITE = 'meta_site';

    /**
     * An array of aliases.
     *
     * @var string[]|null
     */
    protected $aliases;

    /**
     * Api site parameter.
     *
     * @var string
     */
    protected $apiSiteParameter;

    /**
     * Audience.
     *
     * @var string
     */
    protected $audience;

    /**
     * Closed beta date.
     *
     * @var \DateTime|null
     */
    protected $closedBetaDate;

    /**
     * Launch date.
     *
     * @var \DateTime
     */
    protected $launchDate;

    /**
     * An array of markdown extensions.
     *
     * @var string[]|null
     */
    protected $markdownExtensions;

    /**
     * The name.
     *
     * @var string
     */
    protected $name;

    /**
     * Open beta date.
     *
     * @var \DateTime|null
     */
    protected $openBetaDate;

    /**
     * An array of related sites.
     *
     * @var array<\BenatEspina\StackExchangeApiClient\Model\Interfaces\RelatedSiteInterface>|null
     */
    protected $relatedSites = array();

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
     * Styling.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface
     */
    protected $styling;

    /**
     * Twitter account.
     *
     * @var string|null
     */
    protected $twitterAccount;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->loadUrl($json);

        $this->aliases = Util::setIfArrayExists($json, 'aliases');
        $this->apiSiteParameter = Util::setIfExists($json, 'api_site_parameter');
        $this->audience = Util::setIfExists($json, 'audience');
        $this->closedBetaDate = Util::setIfDateTimeExists($json, 'closed_beta_date');
        $this->launchDate = Util::setIfDateTimeExists($json, 'launch_date');
        $this->markdownExtensions = Util::setIfArrayExists($json, 'markdown_extensions');
        $this->name = Util::setIfExists($json, 'name');
        $this->openBetaDate = Util::setIfDateTimeExists($json, 'open_beta_date');
        $sites = Util::setIfArrayExists($json, 'related_sites');
        foreach ($sites as $site) {
            $this->relatedSites[] = new RelatedSite($site);
        }
        $this->siteState = Util::isEqual(
            $json,
            'site_state',
            array(
                self::SITE_STATE_CLOSED_BETA,
                self::SITE_STATE_LINKED_META,
                self::SITE_STATE_NORMAL,
                self::SITE_STATE_OPEN_BETA_DATE
            )
        );
        $this->siteType = Util::isEqual(
            $json,
            'site_type',
            array(self::SITE_TYPE_MAIN_SITE, self::SITE_TYPE_META_SITE)
        );
        $this->siteUrl = Util::setIfExists($json, 'site_url');
        $this->styling = new Styling(Util::setIfExists($json, 'styling'));
        $this->twitterAccount = Util::setIfExists($json, 'twitter_account');
    }

    /**
     * {@inheritdoc}
     */
    public function addAlias($alias)
    {
        $this->aliases[] = $alias;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAlias($alias)
    {
        $this->aliases = Util::removeElement($alias, $this->aliases);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return $this->aliases;
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
    public function setAudience($audience)
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * {@inheritdoc}
     */
    public function setClosedBetaDate(\DateTime $closedBetaDate)
    {
        $this->closedBetaDate = $closedBetaDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getClosedBetaDate()
    {
        return $this->closedBetaDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLaunchDate(\DateTime $launchDate)
    {
        $this->launchDate = $launchDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLaunchDate()
    {
        return $this->launchDate;
    }

    /**
     * {@inheritdoc}
     */
    public function addMarkdownExtension($markdownExtension)
    {
        $this->markdownExtensions[] = $markdownExtension;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeMarkdownExtension($markdownExtension)
    {
        $this->markdownExtensions = Util::removeElement($markdownExtension, $this->markdownExtensions);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMarkdownExtensions()
    {
        return $this->markdownExtensions;
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
    public function setOpenBetaDate(\DateTime $openBetaDate)
    {
        $this->openBetaDate = $openBetaDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOpenBetaDate()
    {
        return $this->openBetaDate;
    }

    /**
     * {@inheritdoc}
     */
    public function addRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites[] = $relatedSite;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeRelatedSite(RelatedSiteInterface $relatedSite)
    {
        $this->relatedSites = Util::removeElement($relatedSite, $this->relatedSites);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedSites()
    {
        return $this->relatedSites;
    }

    /**
     * {@inheritdoc}
     */
    public function setSiteState($siteState)
    {
        if (Util::coincidesElement(
            $siteState,
            array(
                self::SITE_STATE_CLOSED_BETA,
                self::SITE_STATE_LINKED_META,
                self::SITE_STATE_NORMAL,
                self::SITE_STATE_OPEN_BETA_DATE
            )
        )) {
            $this->siteState = $siteState;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteState()
    {
        return $this->siteState;
    }

    /**
     * {@inheritdoc}
     */
    public function setSiteType($siteType)
    {
        if (Util::coincidesElement($siteType, array(self::SITE_TYPE_MAIN_SITE, self::SITE_TYPE_META_SITE))) {
            $this->siteType = $siteType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteType()
    {
        return $this->siteType;
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

    /**
     * {@inheritdoc}
     */
    public function setStyling(StylingInterface $styling)
    {
        $this->styling = $styling;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStyling()
    {
        return $this->styling;
    }

    /**
     * {@inheritdoc}
     */
    public function setTwitterAccount($twitterAccount)
    {
        $this->twitterAccount = $twitterAccount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTwitterAccount()
    {
        return $this->twitterAccount;
    }
}
