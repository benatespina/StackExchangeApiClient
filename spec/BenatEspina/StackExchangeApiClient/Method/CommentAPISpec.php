<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use PhpSpec\ObjectBehavior;

/**
 * Class CommentAPISpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Method
 */
class CommentAPISpec extends ObjectBehavior
{
    /**
     * Response that is return the methods of the CommentAPI.
     *
     * @var (string|boolean|int)[]
     */
    private $response = array(
        'items' => array(
            array(
                'owner'         => array(
                    'reputation'    => 971,
                    'user_id'       => 'user-id',
                    'user_type'     => 'registered',
                    'profile_image' => 'http://profile-image.com',
                    'display_name'  => 'benatespina',
                    'link'          => 'http://stackoverflow.com/users/user-id/benatespina'
                ),
                'edited'        => false,
                'score'         => 0,
                'creation_date' => 1412719935,
                'post_id'       => 'post-id',
                'comment_id'    => 'comment-id'
            )
        )
    );

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
        $client->get('/answers/answer-id;answer-id-2/comments', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getByAnswerIds(array('answer-id', 'answer-id-2'), array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeArray();
    }

    function it_gets_all_comments_on_the_site(Client $client)
    {
        $client->get('/comments', array('site' => 'stackoverflow', 'sort' => 'activity'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getAll(array('site' => 'stackoverflow', 'sort' => 'activity'))->shouldBeArray();
    }

    function it_gets_comments_by_ids(Client $client)
    {
        $client->get('/comments/comment-id;comment-id-2', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn(
                array(
                    'items' => array(
                        array(
                            'owner'         => array(
                                'reputation'    => 971,
                                'user_id'       => 'user-id',
                                'user_type'     => 'registered',
                                'profile_image' => 'http://profile-image.com',
                                'display_name'  => 'benatespina',
                                'link'          => 'http://stackoverflow.com/users/user-id/benatespina'
                            ),
                            'edited'        => false,
                            'score'         => 0,
                            'creation_date' => 1412719935,
                            'post_id'       => 'post-id',
                            'comment_id'    => 'comment-id'
                        ),
                        array(
                            'owner'         => array(
                                'reputation'    => 971,
                                'user_id'       => 'user-id',
                                'user_type'     => 'registered',
                                'profile_image' => 'http://profile-image.com',
                                'display_name'  => 'benatespina',
                                'link'          => 'http://stackoverflow.com/users/user-id/benatespina'
                            ),
                            'edited'        => false,
                            'score'         => 0,
                            'creation_date' => 1412719935,
                            'post_id'       => 'post-id',
                            'comment_id'    => 'comment-id-2'
                        )
                    )
                )
            );

        $this->getByIds(array('comment-id', 'comment-id-2'))->shouldBeArray();
    }

    function it_removes_a_comment(Client $client)
    {
        $client->delete('/comments/comment-id/delete', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->remove('comment-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_edits_a_comment(Client $client)
    {
        $client->put('/comments/comment-id/edit', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->edit('comment-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_adds_flag_on_the_comment(Client $client)
    {
        $client->post(
            '/comments/comment-id/flags/add',
            array(),
            array(
                'site'      => 'StackApps',
                'option_id' => 'Spam',
                'comment'   => 'This comment is spam!'
            )
        )->shouldBeCalled()->willReturn($this->response);

        $this->addFlag(
            'comment-id',
            array(
                'site'      => 'StackApps',
                'option_id' => 'Spam',
                'comment'   => 'This comment is spam!'
            )
        )->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_upvotes_a_comment(Client $client)
    {
        $client->post('/comments/comment-id/upvote', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->upvote('comment-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_undos_upvote_on_the_comment(Client $client)
    {
        $client->post('/comments/comment-id/upvote/undo', array(), array('site' => 'StackApps'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->undoUpvote('comment-id', array('site' => 'StackApps'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_gets_a_comment_by_post_answer_and_question_ids(Client $client)
    {
        $client->get(
            '/posts/post-id;question-id;answer-id/comments', array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByPostAnswerOrQuestionIds(
            array('post-id', 'question-id', 'answer-id'),
            array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeArray();
    }

    function it_creates_a_comment(Client $client)
    {
        $random = mt_rand();
        $client->post(
            '/posts/post-id/comments/add',
            array(),
            array(
                'site' => 'StackApps',
                'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.'
            )
        )->shouldBeCalled()->willReturn($this->response);

        $this->create(
            'post-id',
            array(
                'site' => 'StackApps',
                'body' => 'Spec for Client with random ' . $random . '; this is part of StackExchangeApiClient tests.'
            )
        )->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_renders_a_comment(Client $client)
    {
        $client->post(
            '/posts/post-id/comments/render',
            array(),
            array('site' => 'StackApps', 'body' => 'This is a dummy comment.')
        )->shouldBeCalled()->willReturn($this->response);

        $this->render('post-id', array('site' => 'StackApps', 'body' => 'This is a dummy comment.'))
            ->shouldReturnAnInstanceOf('BenatEspina\StackExchangeApiClient\Model\Interfaces\CommentInterface');
    }

    function it_gets_comments_by_question_ids(Client $client)
    {
        $client->get(
            '/questions/question-id;question-id-2/comments',
            array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByQuestionIds(
            array('question-id', 'question-id-2'), array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeArray();
    }

    function it_gets_comments_by_user_ids(Client $client)
    {
        $client->get(
            '/users/user-id;user-id-2/comments', array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByUserIds(
            array('user-id', 'user-id-2'), array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeArray();
    }

    function it_gets_my_comments(Client $client)
    {
        $client->get('/me/comments', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyComments(array('site' => 'stackoverflow', 'sort' => 'creation'))->shouldBeArray();
    }

    function it_gets_comments_by_user_ids_to_another_user(Client $client)
    {
        $client->get(
            '/users/user-id;user-id-2/comments/to-user-id', array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeCalled()->willReturn($this->response);

        $this->getByUserIdsToUser(
            array('user-id', 'user-id-2'), 'to-user-id', array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeArray();
    }

    function it_gets_my_comments_to_another_user(Client $client)
    {
        $client->get('/me/comments/to-user-id', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyCommentsToUser('to-user-id', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeArray();
    }

    function it_gets_mention_comments_by_user_ids(Client $client)
    {
        $client->get('/users/user-id;user-id-2/mentioned', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMentionsByUserIds(
            array('user-id', 'user-id-2'), array('site' => 'stackoverflow', 'sort' => 'creation')
        )->shouldBeArray();
    }

    function it_gets_my_mention_comments(Client $client)
    {
        $client->get('/me/mentioned', array('site' => 'stackoverflow', 'sort' => 'creation'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getMyMentions(array('site' => 'stackoverflow', 'sort' => 'creation'))->shouldBeArray();
    }
}
