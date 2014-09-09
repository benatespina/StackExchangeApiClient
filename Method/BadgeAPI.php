<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use BenatEspina\StackExchangeApiClient\Model\Badge;

/**
 * Class BadgeAPI.
 *
 * @package BenatEspina\StackExchangeApiClient\Method
 */
class BadgeAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * The prefix of badges API requests.
     *
     * @var string
     */
    protected $prefix = '/badges';

    /**
     * Constructor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Client $client that will be used to connect the server
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get all badges on the site, in alphabetical order.
     *
     * More info: https://api.stackexchange.com/docs/badges
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getBadges($params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
    {
        return $this->responseToBadge($this->client->get($this->prefix, $params));
    }

    /**
     * Gets the badges identified in id.
     *
     * More info: https://api.stackexchange.com/docs/badges-by-ids
     *
     * @param int[]    $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getBadgesByIds($ids, $params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
    {
        return $this->responseToBadge($this->client->get($this->prefix . '/' . implode(';', $ids), $params));
    }

    /**
     * Gets all explicitly named badges in the system.
     *
     * More info: https://api.stackexchange.com/docs/badges-by-name
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getNamedBadges($params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
    {
        return $this->responseToBadge($this->client->get($this->prefix . '/name', $params));
    }

    /**
     * Returns recently awarded badges in the system.
     *
     * More info: https://api.stackexchange.com/docs/badge-recipients
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getRecipientBadges($params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
    {
        return $this->responseToBadge($this->client->get($this->prefix . '/recipients', $params));
    }

    /**
     * Get the recent recipients of the given badges.
     *
     * More info: https://api.stackexchange.com/docs/badge-recipients-by-ids
     *
     * @param int[]    $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getRecipientBadgesByIds(
        $ids,
        $params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
    )
    {
        return $this->responseToBadge(
            $this->client->get($this->prefix . '/' . implode(';', $ids) . '/recipients', $params)
        );
    }

    /**
     * Returns the badges that are awarded for participation in specific tags.
     *
     * More info: https://api.stackexchange.com/docs/badges-by-tag
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getTagBasedBadges($params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'))
    {
        return $this->responseToBadge($this->client->get($this->prefix . '/tags', $params));
    }

    /**
     * Get the badges earned by the users identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/badges-on-users
     *
     * @param int[]    $users  The array which contains the user ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    public function getBadgesByUsers(
        $users,
        $params = array('site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc')
    )
    {
        return $this->responseToBadge(
            $this->client->get('/users/' . implode(';', $users) . $this->prefix, $params)
        );
    }

    /**
     * Transforms the json decodes array to badge objects array.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\BadgeInterface>
     */
    private function responseToBadge($response)
    {
        $badges = array();
        foreach ($response['items'] as $response) {
            $badges[] = new Badge($response);
        }

        return $badges;
    }
}
