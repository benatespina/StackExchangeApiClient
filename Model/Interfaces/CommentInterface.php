<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Model\Interfaces;

/**
 * Interface CommentInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface CommentInterface
{
    /**
     * Sets can flag.
     *
     * @param boolean $canFlag The canFlag boolean
     *
     * @return $this self Object
     */
    public function setCanFlag($canFlag);

    /**
     * Gets can flag.
     *
     * @return boolean
     */
    public function isCanFlag();

    /**
     * Sets edited.
     *
     * @param boolean $edited The edited boolean
     *
     * @return $this self Object
     */
    public function setEdited($edited);

    /**
     * Gets edited.
     *
     * @return boolean
     */
    public function isEdited();

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
     * Sets reply to user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $user The shallow user
     *
     * @return $this self Object
     */
    public function setReplyToUser(ShallowUserInterface $user);

    /**
     * Gets reply to user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getReplyToUser();
}
