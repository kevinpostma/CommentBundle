<?php

namespace Kp\Bundle\CommentBundle\Model;

use DateTime;

/**
 * Promotion model interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface CommentInterface
{
    /**
     * Returns id of comment
     */
    public function getId();
    
    /**
     * check if comment is active
     * @return boolean active
     */
    public function getActive();
    
    /**
     * Set the active state of a comment.
     * @param boolean $active
     */
    public function setActive($active);
    
    /**
     * @return string author, 
     * returns the author of a comment
     */
    public function getAuthor();
    
    /**
     * Sets the author of a comment
     * @param type $author
     */
    public function setAuthor($author);
    
    /**
     * @return datetime create date of a comment
     * returns Create date of a comment
     */
    public function getCreatedAt();
    
    /**
     * Sets the create date of a comment;
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);
    
    /**
     * Sets the comment
     * @param text $comment
     */
    public function setComment($comment);
    
    /**
     * Returns the comment
     * @return text $comment
     */
    public function getComment();
    
}
