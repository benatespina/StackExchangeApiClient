<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use BenatEspina\StackExchangeApiClient\Model\Comment;

/**
 * Class CommentAPI.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
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
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByAnswerIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get('/answers/' . implode(';', $ids) . $this->prefix, $params));
    }

    /**
     * Get all comments on the site.
     *
     * More info: https://api.stackexchange.com/docs/comments
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getAll($params = ['site' => 'stackoverflow', 'sort' => 'creation'])
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
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get($this->prefix . '/' . implode(';', $ids), $params));
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
    public function remove($id, $request = [])
    {
        return $this->responseToComment(
            $this->client->delete($this->prefix . '/' . $id . '/delete', [], $request)
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
    public function edit($id, $request = [])
    {
        return $this->responseToComment($this->client->put($this->prefix . '/' . $id . '/edit', [], $request));
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
    public function addFlag($id, $request = [])
    {
        return $this->responseToComment(
            $this->client->post($this->prefix . '/' . $id . '/flags/add', [], $request)
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
    public function upvote($id, $request = [])
    {
        return $this->responseToComment($this->client->post($this->prefix . '/' . $id . '/upvote', [], $request));
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
    public function undoUpvote($id, $request = [])
    {
        return $this->responseToComment(
            $this->client->post($this->prefix . '/' . $id . '/upvote/undo', [], $request)
        );
    }

    /**
     * Get comments on the posts (question or answer) identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/comments-on-posts
     *
     * @param string[] $ids    The ids that which can be post_id, answer_id or question_id
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByPostAnswerOrQuestionIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get('/posts/' . implode(';', $ids) . $this->prefix, $params));
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
    public function create($id, $request = [])
    {
        return $this->responseToComment(
            $this->client->post('/posts/' . $id . $this->prefix . '/add', [], $request)
        );
    }

    /**
     * Renders a hypothetical comment on the given post.
     *
     * More info: https://api.stackexchange.com/docs/render-comment
     *
     * @param string   $id      The id of comment
     * @param string[] $request The array which contains the required parameters as 'site' and 'body'
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface
     */
    public function render($id, $request = [])
    {
        return $this->responseToComment(
            $this->client->post('/posts/' . $id . $this->prefix . '/render', [], $request)
        );
    }

    /**
     * Get the comments on the questions identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/comments-on-questions
     *
     * @param string[] $ids    The array which contains the ids of questions delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByQuestionIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray(
            $this->client->get('/questions/' . implode(';', $ids) . $this->prefix, $params)
        );
    }

    /**
     * Get the comments posted by the users identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/comments-on-users
     *
     * @param string[] $ids    The array which contains the ids of users delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByUserIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray(
            $this->client->get('/users/' . implode(';', $ids) . $this->prefix, $params)
        );
    }

    /**
     * Returns the comments owned by the user associated with the given access_token.
     *
     * More info: https://api.stackexchange.com/docs/me-comments
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getMyComments($params = ['site' => 'stackoverflow', 'sort' => 'rank', 'order' => 'desc'])
    {
        return $this->responseToArray($this->client->get('/me' . $this->prefix, $params));
    }

    /**
     * Get the comments posted by a set of users in reply to another user.
     *
     * More info: https://api.stackexchange.com/docs/comments-by-users-to-user
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param string   $toId   The id of the user
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getByUserIdsToUser($ids = [], $toId, $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray(
            $this->client->get('/users/' . implode(';', $ids) . $this->prefix . '/' . $toId, $params)
        );
    }

    /**
     * Returns the comments owned by the user associated with the given
     * access_token that are in reply to the user identified by {toId}.
     *
     * More info: https://api.stackexchange.com/docs/me-comments-to
     *
     * @param string   $id     The id of the user
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getMyCommentsToUser($id, $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get('/me' . $this->prefix . '/' . $id, $params));
    }

    /**
     * Get the comments that mention one of the users identified by a set of ids.
     *
     * More info: https://api.stackexchange.com/docs/mentions-on-users
     *
     * @param string[] $ids    The array which contains the ids delimited by semicolon
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getMentionsByUserIds($ids = [], $params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get('/users/' . implode(';', $ids) . '/mentioned', $params));
    }

    /**
     * Returns the comments mentioning the user associated with the given access_token.
     *
     * More info: https://api.stackexchange.com/docs/me-mentioned
     *
     * @param string[] $params QueryString parameter(s), by default, the basic to work:
     *                         array('site' => 'stackoverflow', 'sort' => 'creation', 'order' => 'desc')
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface>
     */
    public function getMyMentions($params = ['site' => 'stackoverflow', 'sort' => 'creation'])
    {
        return $this->responseToArray($this->client->get('/me/mentioned', $params));
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
        $comments = [];
        foreach ($response['items'] as $response) {
            $comments[] = new Comment($response);
        }

        return $comments;
    }
}
