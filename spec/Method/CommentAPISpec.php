<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of CommentAPI class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CommentAPISpec extends ObjectBehavior
{
    /**
     * Response that is return the methods of the CommentAPI.
     *
     * @var (string|bool|int)[]
     */
    private $response = ['items' => [
        [
            'owner'         => [
                'reputation'    => 971,
                'user_id'       => 'user-id',
                'user_type'     => 'registered',
                'profile_image' => 'http://profile-image.com',
                'display_name'  => 'benatespina',
                'link'          => 'http://stackoverflow.com/users/user-id/benatespina',
            ],
            'edited'        => false,
            'score'         => 0,
            'creation_date' => 1412719935,
            'post_id'       => 'post-id',
            'comment_id'    => 'comment-id',
        ],
    ]];

    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('BenatEspina\StackExchangeApiClient\Method\CommentAPI');
    }

    function it_gets_comment_by_answer_ids(Client $client)
    {
        $client->get('/answers/answer-id;answer-id-2/comments', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getByAnswerIds(['answer-id', 'answer-id-2'], ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeArray();
    }

    function it_gets_all_comments_on_the_site(Client $client)
    {
        $client->get('/comments', ['site' => 'stackoverflow', 'sort' => 'activity'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getAll(['site' => 'stackoverflow', 'sort' => 'activity'])->shouldBeArray();
    }

    function it_gets_comments_by_ids(Client $client)
    {
        $client->get('/comments/comment-id;comment-id-2', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn(['items' => [
                [
                    'owner'         => [
                        'reputation'    => 971,
                        'user_id'       => 'user-id',
                        'user_type'     => 'registered',
                        'profile_image' => 'http://profile-image.com',
                        'display_name'  => 'benatespina',
                        'link'          => 'http://stackoverflow.com/users/user-id/benatespina',
                    ],
                    'edited'        => false,
                    'score'         => 0,
                    'creation_date' => 1412719935,
                    'post_id'       => 'post-id',
                    'comment_id'    => 'comment-id',
                ],
                [
                    'owner'         => [
                        'reputation'    => 971,
                        'user_id'       => 'user-id',
                        'user_type'     => 'registered',
                        'profile_image' => 'http://profile-image.com',
                        'display_name'  => 'benatespina',
                        'link'          => 'http://stackoverflow.com/users/user-id/benatespina',
                    ],
                    'edited'        => false,
                    'score'         => 0,
                    'creation_date' => 1412719935,
                    'post_id'       => 'post-id',
                    'comment_id'    => 'comment-id-2',
                ],
            ]]);

        $this->getByIds(['comment-id', 'comment-id-2'])->shouldBeArray();
    }

    function it_removes_a_comment(Client $client)
    {
        $client->delete('/comments/comment-id/delete', [], ['site' => 'StackApps'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->remove('comment-id', ['site' => 'StackApps'])
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_edits_a_comment(Client $client)
    {
        $client->put('/comments/comment-id/edit', [], ['site' => 'StackApps'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->edit('comment-id', ['site' => 'StackApps'])
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_adds_flag_on_the_comment(Client $client)
    {
        $client->post('/comments/comment-id/flags/add', [], [
            'site'      => 'StackApps',
            'option_id' => 'Spam',
            'comment'   => 'This comment is spam!',
        ])->shouldBeCalled()->willReturn($this->response);

        $this->addFlag('comment-id', [
            'site'      => 'StackApps',
            'option_id' => 'Spam',
            'comment'   => 'This comment is spam!',
        ])->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_upvotes_a_comment(Client $client)
    {
        $client->post('/comments/comment-id/upvote', [], ['site' => 'StackApps'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->upvote('comment-id', ['site' => 'StackApps'])
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_undos_upvote_on_the_comment(Client $client)
    {
        $client->post('/comments/comment-id/upvote/undo', [], ['site' => 'StackApps'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->undoUpvote('comment-id', ['site' => 'StackApps'])
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_gets_a_comment_by_post_answer_and_question_ids(Client $client)
    {
        $client->get(
            '/posts/post-id;question-id;answer-id/comments', ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByPostAnswerOrQuestionIds(
            ['post-id', 'question-id', 'answer-id'],
            ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeArray();
    }

    function it_creates_a_comment(Client $client)
    {
        $random = mt_rand();
        $client->post('/posts/post-id/comments/add', [], [
            'site' => 'StackApps',
            'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.',
        ])->shouldBeCalled()->willReturn($this->response);

        $this->create('post-id', [
            'site' => 'StackApps',
            'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.',
        ])->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_renders_a_comment(Client $client)
    {
        $client->post('/posts/post-id/comments/render', [], [
            'site' => 'StackApps',
            'body' => 'This is a dummy comment.',
        ])->shouldBeCalled()->willReturn($this->response);

        $this->render('post-id', ['site' => 'StackApps', 'body' => 'This is a dummy comment.'])
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_gets_comments_by_question_ids(Client $client)
    {
        $client->get('/questions/question-id;question-id-2/comments', [
            'site' => 'stackoverflow',
            'sort' => 'creation',
        ])->shouldBeCalled()->willReturn($this->response);

        $this->getByQuestionIds(
            ['question-id', 'question-id-2'], ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeArray();
    }

    function it_gets_comments_by_user_ids(Client $client)
    {
        $client->get(
            '/users/user-id;user-id-2/comments', ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByUserIds(
            ['user-id', 'user-id-2'], ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeArray();
    }

    function it_gets_my_comments(Client $client)
    {
        $client->get('/me/comments', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyComments(['site' => 'stackoverflow', 'sort' => 'creation'])->shouldBeArray();
    }

    function it_gets_comments_by_user_ids_to_another_user(Client $client)
    {
        $client->get(
            '/users/user-id;user-id-2/comments/to-user-id', ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByUserIdsToUser(
            ['user-id', 'user-id-2'], 'to-user-id', ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeArray();
    }

    function it_gets_my_comments_to_another_user(Client $client)
    {
        $client->get('/me/comments/to-user-id', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyCommentsToUser('to-user-id', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeArray();
    }

    function it_gets_mention_comments_by_user_ids(Client $client)
    {
        $client->get('/users/user-id;user-id-2/mentioned', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMentionsByUserIds(
            ['user-id', 'user-id-2'], ['site' => 'stackoverflow', 'sort' => 'creation']
        )->shouldBeArray();
    }

    function it_gets_my_mention_comments(Client $client)
    {
        $client->get('/me/mentioned', ['site' => 'stackoverflow', 'sort' => 'creation'])
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyMentions(['site' => 'stackoverflow', 'sort' => 'creation'])->shouldBeArray();
    }
}
