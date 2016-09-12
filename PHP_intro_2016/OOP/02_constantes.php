<?php
/**
 * Les constantes
 */

class User{
    protected $userId;
    protected $privilege;

    const USER_ADMIN=1;
    const USER_WRITER=2;
    const USER_MODERATOR=3;

    public function __construct($id)
    {
        $this->userId = $id;
    }

    public function getId()
    {
        return $this->userId;
    }

    //J'ai rajouté cette fonction setPrivilege()
    public function setPrivilege($code){
        if(in_array($code,[self::USER_ADMIN,user::USER_WRITER,user::USER_MODERATOR])){
            $this->privilege = $code;
        }
    }

    public function getPrivilege(){
        return $this->privilege;
    }

}

$object = new User(5);
$object->setPrivilege(user::USER_MODERATOR);
echo $object->getPrivilege();

