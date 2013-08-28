<?php

namespace Kp\Bundle\CommentBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Storage agnostic comment object
 *
 * @author Kevin Postma <kevinpostma@live.nl>
 */
abstract class Comment implements CommentInterface
{
    private $id;
    private $active;
    private $author;
    private $createdAt;
    private $comment;
    
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setActive($active)
    {
        $this->active = $active;
    }
    
    public function getActive()
    {
        return $this->active;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    
    public function getComment()
    {
        return $this->comment;
    }

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

?>
