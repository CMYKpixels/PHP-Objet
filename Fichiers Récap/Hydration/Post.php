<?php

/**
 * Assignment of values
 * Hydration is a more specific term which means assignmment of a content of an array into properties of an object
 * through a "hydration strategy" -> in other words populate is the word more commonly used
 * The inverse is called extraction
 */

class Post{
    private $_id;
    private $_posterId;
    private $_date_post;
    private $_title;
    private $_description;

    public function __construct(array $data){
        $this->hydrate($data);
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

    public function hydrate(array $array){
        foreach($array as $key => $value){
            $aliasMethod = 'set'.self::capitalizeField($key);
            if(method_exists($this,$aliasMethod)){
                $this->$aliasMethod($value);
            }
        }
    }

    static public function capitalizeField($string){
        $exploded = explode('_',$string);
        $newString='';
        foreach($exploded as $e){
            $newString .= ucfirst($e);
        }
        return $newString;
    }


}