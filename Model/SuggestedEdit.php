<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract as BaseSuggestedEdit;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\SuggestedEditInterface;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class SuggestedEdit.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class SuggestedEdit extends BaseSuggestedEdit implements SuggestedEditInterface
{
    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    /**
     * Approval date.
     *
     * @var \DateTime|null
     */
    protected $approvalDate;

    /**
     * The body.
     *
     * @var string|null
     */
    protected $body;

    /**
     * The comment.
     *
     * @var string
     */
    protected $comment;

    /**
     * The post id.
     *
     * @var int
     */
    protected $postId;

    /**
     * Post type that can be 'answer' or 'question'.
     *
     * @var string.
     */
    protected $postType;

    /**
     * The proposing user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $proposingUser;

    /**
     * Rejection date.
     *
     * @var \DateTime|null
     */
    protected $rejectionDate;

    /**
     * Suggested edit id.
     *
     * @var int
     */
    protected $suggestedEditId;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        $this->approvalDate = Util::setIfDateTimeExists($json, 'approval_date');
        $this->body = Util::setIfStringExists($json, 'body');
        $this->comment = Util::setIfStringExists($json, 'comment');
        $this->postId = Util::setIfIntegerExists($json, 'post_id');
        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_QUESTION, self::POST_TYPE_ANSWER));
        $this->proposingUser = new ShallowUser(Util::setIfArrayExists($json, 'proposing_user'));
        $this->rejectionDate = Util::setIfDateTimeExists($json, 'rejection_date');
        $this->suggestedEditId = new ShallowUser(Util::setIfArrayExists($json, 'suggested_edit_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function setApprovalDate(\DateTime $approvalDate)
    {
        $this->approvalDate = $approvalDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * {@inheritdoc}
     */
    public function setPostType($postType)
    {
        if (Util::coincidesElement($postType, array(self::POST_TYPE_ANSWER, self::POST_TYPE_QUESTION)) === true) {
            $this->postType = $postType;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * {@inheritdoc}
     */
    public function setProposingUser(ShallowUserInterface $proposingUser)
    {
        $this->proposingUser = $proposingUser;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProposingUser()
    {
        return $this->proposingUser;
    }

    /**
     * {@inheritdoc}
     */
    public function setRejectionDate(\DateTime $rejectionDate)
    {
        $this->rejectionDate = $rejectionDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRejectionDate()
    {
        return $this->rejectionDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setSuggestedEditId($suggestedEditId)
    {
        $this->suggestedEditId = $suggestedEditId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSuggestedEditId()
    {
        return $this->suggestedEditId;
    }
}
