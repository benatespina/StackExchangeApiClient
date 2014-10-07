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
use BenatEspina\StackExchangeApiClient\Model\Comment;

/**
 * Class CommentAPI.
 *
 * @package BenatEspina\StackExchangeApiClient\Method
 */
class CommentAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * The prefix of answers API requests.
     *
     * @var string
     */
    protected $prefix = '/comments';

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
     * Get comments on the answers identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/comments-on-answers
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByAnswerIds($ids, $params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToArray($this->client->get('/answers/' . implode(';', $ids) . $this->prefix, $params));
    }

    /**
     * Get all comments on the site.
     *
     * More info: https://api.stackexchange.com/docs/comments
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getAll($params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToArray($this->client->get($this->prefix, $params));
    }

    /**
     * Get comments identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/comments-by-ids
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'activity')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByIds($ids, $params = array('site' => 'stackoverflow', 'sort' => 'activity'))
    {
        return $this->responseToArray($this->client->get($this->prefix . '/' . implode(';', $ids), $params));
    }

    /**
     * Create a new comment on the post identified by id.
     *
     * More info: https://api.stackexchange.com/docs/create-comment
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site' and 'body'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function create($id, $request = array())
    {
        return $this->responseToComment(
            $this->client->post('/posts/' . $id . $this->prefix . '/add', array(), $request)
        );
    }

    /**
     * Delete a comment identified by its id.
     *
     * More info: https://api.stackexchange.com/docs/delete-comment
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function remove($id, $request = array())
    {
        return $this->responseToComment(
            $this->client->delete($this->prefix . '/' . $id . '/delete', array(), $request)
        );
    }

    /**
     * Edit a comment identified by its id.
     *
     * More info: https://api.stackexchange.com/docs/edit-comment
     *
     * @param string   $id      The id of question
     * @param string[] $request The array which contains the required parameters as 'site'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function edit($id, $request = array())
    {
        return $this->responseToComment($this->client->put($this->prefix . '/' . $id . '/edit', array(), $request));
    }

    /**
     * Casts a flag on the given comment.
     *
     * More info: https://api.stackexchange.com/docs/create-comment-flag
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site', 'option_id' and 'comment'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function addFlag($id, $request = array())
    {
        return $this->responseToComment(
            $this->client->post($this->prefix . '/' . $id . '/flags/add', array(), $request)
        );
    }

    /**
     * Casts an upvote on the given comment.
     *
     * More info: https://api.stackexchange.com/docs/upvote-comment
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function upvote($id, $request = array())
    {
        return $this->responseToComment($this->client->post($this->prefix . '/' . $id . '/upvote', array(), $request));
    }

    /**
     * Undoes an upvote on the given comment.
     *
     * More info: https://api.stackexchange.com/docs/undo-upvote-comment
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function undoUpvote($id, $request = array())
    {
        return $this->responseToComment(
            $this->client->post($this->prefix . '/' . $id . '/upvote/undo', array(), $request)
        );
    }

    /**
     * Returns the first element of array of comments.
     * This is useful for these methods that only returns an only one comment.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    private function responseToComment($response)
    {
        return $this->responseToArray($response)[0];
    }

    /**
     * Transforms the json decodes array to answer objects array.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    private function responseToArray($response)
    {
        $comments = array();
        foreach ($response['items'] as $response) {
            $comments[] = new Comment($response);
        }

        return $comments;
    }
}
