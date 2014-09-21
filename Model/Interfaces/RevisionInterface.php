<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\LastInterface;
use BenatEspina\StackExchangeApiClient\Model\Interfaces\Traits\RevisionInterface as RevisionTraitInterface;

/**
 * Interface RevisionInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface RevisionInterface extends LastInterface, RevisionTraitInterface
{
    /**
     * Sets body.
     *
     * @param string|null $body The body
     *
     * @return $this self Object
     */
    public function setBody($body);

    /**
     * Gets body.
     *
     * @return string|null
     */
    public function getBody();

    /**
     * Sets comment.
     *
     * @param string $comment The comment
     *
     * @return $this self Object
     */
    public function setComment($comment);

    /**
     * Gets comment.
     *
     * @return string
     */
    public function getComment();

    /**
     * Sets is rollback.
     *
     * @param boolean $isRollback The isRollback boolean
     *
     * @return $this self Object
     */
    public function setRollback($isRollback);

    /**
     * Gets is rollback.
     *
     * @return boolean
     */
    public function isRollback();

    /**
     * Sets post id.
     *
     * @param int $postId The post id
     *
     * @return $this self Object
     */
    public function setPostId($postId);

    /**
     * Gets post id.
     *
     * @return int
     */
    public function getPostId();

    /**
     * Sets post type.
     *
     * @param int $postType The post type that can be 'question' or 'answer'
     *
     * @return $this self Object
     */
    public function setPostType($postType);

    /**
     * Gets post type.
     *
     * @return int
     */
    public function getPostType();

    /**
     * Sets set community wiki.
     *
     * @param boolean $setCommunityWiki The set community wiki boolean
     *
     * @return $this self Object
     */
    public function setCommunityWiki($setCommunityWiki);

    /**
     * Gets set community wiki.
     *
     * @return boolean
     */
    public function isCommunityWiki();

    /**
     * Sets user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface $user The user
     *
     * @return $this self Object
     */
    public function setUser(ShallowUserInterface $user);

    /**
     * Gets user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface
     */
    public function getUser();
}
