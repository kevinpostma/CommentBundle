<?php

namespace Kp\CommentBundle\Model;

/**
 * Description of CommentableInterface
 *
 * @author kevin
 */
interface CommentableInterface
{
    /**
     * Make entity commentable and set comments for this entity
     */
    public function setComments();
    
    /**
     * Make entity commentable and returns comments for this entity
     */
    public function getComments();
    
    /**
     * returns false by default. if set to true. comments must be checked before showing online
     */
    public function commentsChecks();
}

?>
