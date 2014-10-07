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
        $client->get('/answers/answer-id;answer-id-2/comments', array('site' => 'stackoverflow', 'sort' => 'activity'))
            ->shouldBeCalled()->willReturn($this->response);

        $this->getByAnswerIds(array('answer-id', 'answer-id-2'), array('site' => 'stackoverflow', 'sort' => 'activity'))
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
        $client->get('/comments/comment-id;comment-id-2', array('site' => 'stackoverflow', 'sort' => 'activity'))
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
}
