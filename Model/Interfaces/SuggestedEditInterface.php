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
 * Interface SuggestedEditInterface.
 *
 * @package BenatEspina\StackExchangeApiClient\Model\Interfaces
 */
interface SuggestedEditInterface
{
    /**
     * Sets approval date.
     *
     * @param \DateTime|null $approvalDate The approval date
     *
     * @return $this self Object
     */
    public function setApprovalDate(\DateTime $approvalDate);

    /**
     * Gets approval date.
     *
     * @return \DateTime|null
     */
    public function getApprovalDate();

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
     * Sets proposing user.
     *
     * @param \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null $proposingUser The
     *                                                                                                      proposing
     *                                                                                                      user
     *
     * @return $this self Object
     */
    public function setProposingUser(ShallowUserInterface $proposingUser);

    /**
     * Gets proposing user.
     *
     * @return \BenatEspina\StackExchangeApiClient\Model\Interfaces\ShallowUserInterface|null
     */
    public function getProposingUser();

    /**
     * Sets rejection date.
     *
     * @param \DateTime|null $rejectionDate The rejection date
     *
     * @return $this self Object
     */
    public function setRejectionDate(\DateTime $rejectionDate);

    /**
     * Gets rejection date.
     *
     * @return \DateTime|null
     */
    public function getRejectionDate();

    /**
     * Sets suggested edit id.
     *
     * @param int $suggestedEditId The suggested edit id
     *
     * @return $this self Object
     */
    public function setSuggestedEditId($suggestedEditId);

    /**
     * Gets suggested edit id.
     *
     * @return int
     */
    public function getSuggestedEditId();
}
