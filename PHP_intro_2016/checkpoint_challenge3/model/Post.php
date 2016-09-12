<?php

/**
 * Assignment of values
 * Hydration is a more specific term which means assignmment of a content of an array into properties of an object
 * through a "hydration strategy" -> in other words populate is the word more commonly used
 * The inverse is called extraction
 */

class Post extends Hydrator{
    private $_id;
    private $_posterId;
    private $_date_post;
    private $_title;
    private $_description;
    /** en dehors de la table   */
    private $_email_user;
    private $_username;
    private $_nb_comment;

    public function __construct(array $data){
        $this->hydrate($data);
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
    public function getPosterId()
    {
        return $this->_posterId;
    }

    /**
     * @param mixed $posterId
     */
    public function setPosterId($posterId)
    {
        $this->_posterId = $posterId;
    }

    /**
     * @return mixed
     */
    public function getDatePost()
    {
        return $this->_date_post;
    }

    /**
     * @param mixed $date_post
     */
    public function setDatePost($date_post)
    {
        $this->_date_post = $date_post;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getEmailUser()
    {
        return $this->_email_user;
    }

    /**
     * @param mixed $email_user
     */
    public function setEmailUser($email_user)
    {
        $this->_email_user = $email_user;
    }

    /**
     * @return mixed
     */
    public function getNbComment()
    {
        return $this->_nb_comment;
    }

    /**
     * @param mixed $nb_comment
     */
    public function setNbComment($nb_comment)
    {
        $this->_nb_comment = $nb_comment;
    }
}