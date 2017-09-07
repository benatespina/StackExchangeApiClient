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
 * The access token model class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RelatedSite implements Model
{
    const RELATIONS = ['chat', 'meta', 'parent'];

    protected $apiSiteParameter;
    protected $name;
    protected $relation;
    protected $siteUrl;

    public static function fromProperties(
        $apiSiteParameter,
        $name,
        $relation,
        $siteUrl
    ) {
        $instance = new self();
        $instance
            ->setApiSiteParameter($apiSiteParameter)
            ->setName($name)
            ->setRelation($relation)
            ->setSiteUrl($siteUrl);

        return $instance;
    }

    public static function fromJson(array $data)
    {
        $instance = new self();
        $instance
            ->setApiSiteParameter(array_key_exists('api_site_parameter', $data) ? $data['api_site_parameter'] : null)
            ->setName(array_key_exists('name', $data) ? $data['name'] : null)
            ->setName(array_key_exists('relation', $data) ? $data['relation'] : null)
            ->setName(array_key_exists('site_url', $data) ? $data['site_url'] : null);

        return $instance;
    }

    public function setApiSiteParameter($apiSiteParameter)
    {
        $this->apiSiteParameter = $apiSiteParameter;

        return $this;
    }

    public function getApiSiteParameter()
    {
        return $this->apiSiteParameter;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRelation($relation)
    {
        if (in_array($relation, self::RELATIONS, true)) {
            $this->relation = $relation;
        }

        return $this;
    }

    public function getRelation()
    {
        return $this->relation;
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
}
