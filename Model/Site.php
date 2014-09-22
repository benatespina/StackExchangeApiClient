<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\SiteInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\StylingInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\BetaDateTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\SiteTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\UrlTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Site.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Site implements SiteInterface
{
    use
        BetaDateTrait,
        SiteTrait,
        UrlTrait;

    const SITE_STATE_CLOSED_BETA = 'closed_beta';
    const SITE_STATE_LINKED_META = 'linked_meta';
    const SITE_STATE_NORMAL = 'normal';
    const SITE_STATE_OPEN_BETA = 'open_beta';

    const SITE_TYPE_MAIN_SITE = 'main_site';
    const SITE_TYPE_META_SITE = 'meta_site';

    /**
     * An array of aliases.
     *
     * @var string[]
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
     * Launch date.
     *
     * @var \DateTime
     */
    protected $launchDate;

    /**
     * An array of markdown extensions.
     *
     * @var string[]
     */
    protected $markdownExtensions;

    /**
     * The name.
     *
     * @var string
     */
    protected $name;

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
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->loadBetaDate($json);
        $this->loadSite(
            $json,
            array(
                self::SITE_STATE_CLOSED_BETA,
                self::SITE_STATE_LINKED_META,
                self::SITE_STATE_NORMAL,
                self::SITE_STATE_OPEN_BETA
            ),
            array(self::SITE_TYPE_MAIN_SITE, self::SITE_TYPE_META_SITE)
        );
        $this->loadUrl($json);

        $this->aliases = Util::setIfArrayExists($json, 'aliases');
        $this->apiSiteParameter = Util::setIfStringExists($json, 'api_site_parameter');
        $this->audience = Util::setIfStringExists($json, 'audience');
        $this->launchDate = Util::setIfDateTimeExists($json, 'launch_date');
        $this->markdownExtensions = Util::setIfArrayExists($json, 'markdown_extensions');
        $this->name = Util::setIfStringExists($json, 'name');
        $this->styling = new Styling(Util::setIfArrayExists($json, 'styling'));
        $this->twitterAccount = Util::setIfStringExists($json, 'twitter_account');
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
