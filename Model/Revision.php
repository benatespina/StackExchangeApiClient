<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Abstracts\Base2Abstract as BaseRevision;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\RevisionInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\LastTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\RevisionTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class Revision.
 *
 * @package BenatEspina\StackExchangeApiClient\Model
 */
class Revision extends BaseRevision implements RevisionInterface
{
    use 
        LastTrait,
        RevisionTrait;

    const POST_TYPE_QUESTION = 'question';
    const POST_TYPE_ANSWER = 'answer';

    const REVISION_TYPE_SINGLE_USER = 'single_user';
    const REVISION_TYPE_VOTE_BASED = 'vote_based';

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
     * Is rollback.
     *
     * @var boolean.
     */
    protected $rollback;

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
     * Set community wiki.
     *
     * @var boolean.
     */
    protected $setCommunityWiki;

    /**
     * The user.
     *
     * @var \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    protected $user;

    /**
     * Constructor.
     *
     * @param null|(int|string)[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);
        
        $this->loadLast($json);
        $this->loadRevision($json, array(self::REVISION_TYPE_SINGLE_USER, self::REVISION_TYPE_VOTE_BASED));

        $this->body = Util::setIfExists($json, 'body');
        $this->comment = Util::setIfExists($json, 'comment');
        $this->isRollback = Util::setIfExists($json, 'is_rollback');
        $this->postId = Util::setIfExists($json, 'post_id');
        $this->postType = Util::isEqual($json, 'post_type', array(self::POST_TYPE_QUESTION, self::POST_TYPE_ANSWER));
        $this->setCommunityWiki = Util::setIfExists($json, 'set_community_wiki');
        $this->user = new ShallowUser(Util::setIfExists($json, 'user'));
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
    public function setRollback($isRollback)
    {
        $this->rollback = $isRollback;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isRollback()
    {
        return $this->rollback;
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
        if (Util::coincidesElement(
            $postType,
            array(
                self::POST_TYPE_ANSWER,
                self::POST_TYPE_QUESTION
            )
        )) {
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
    public function setCommunityWiki($setCommunityWiki)
    {
        $this->setCommunityWiki = $setCommunityWiki;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isCommunityWiki()
    {
        return $this->setCommunityWiki;
    }

    /**
     * {@inheritdoc}
     */
    public function setUser(ShallowUserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }
}
