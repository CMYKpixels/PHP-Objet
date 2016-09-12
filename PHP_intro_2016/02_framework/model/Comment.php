<?php

/**
 * Created by PhpStorm.
 * User: Alfonso
 * Date: 7/20/2016
 * Time: 21:22 PM
 */
class Comment extends Hydrator
{
    protected $_id;
    protected $_commentator_id;
    protected $_post_id;
    protected $_date_com;
    protected $_comment;

    /** En dehors de la table */
    protected $_username;
    protected $_email;


    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getCommentatorId()
    {
        return $this->_commentator_id;
    }

    /**
     * @param mixed $commentator_id
     */
    public function setCommentatorId($commentator_id)
    {
        $this->_commentator_id = $commentator_id;
    }

    /**
     * @return mixed
     */
    public function getDateCom()
    {
        return $this->_date_com;
    }

    /**
     * @param mixed $date_com
     */
    public function setDateCom($date_com)
    {
        $this->_date_com = $date_com;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->_comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->_post_id;
    }

    /**
     * @param mixed $post_id
     */
    public function setPostId($post_id)
    {
        $this->_post_id = $post_id;
    }

}