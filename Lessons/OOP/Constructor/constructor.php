<?php

    /*
            class User
        {
            private $_userId;

            public function __construct ($id)
            {
                $this->_userId = $id;
            }

            public function getId ()
            {
                return $this->_userId;
            }
        }
    */

//////////////////////////////////////////////////////
/*
    class User
    {
        protected $userId;
        protected $privilege;
        const USER_ADMIN     = 1;
        const USER_WRITER    = 2;
        const USER_MODERATOR = 3;

        public function __construct ($id)
        {
            $this->_userId = $id;
        }

        public function getId ()
        {
            return $this->_userId;
        }

        public function setPrivilege ($code)
        {
            if (in_array($code, [self::USER_ADMIN, user::USER_WRITER, user::USER_MODERATOR])) {
                $this->privilege = $code;
            }

            return $this->privilege;
        }

        public function getPrivilege ()
        {
            return $this->privilege;
        }
    }

    $objet = new User(5);
    $objet = setPrivilege(User::USER_MODERATOR);
    echo $objet->getPrivilege();
*/
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    class User
    {
        protected $userId;
        protected $privilege;
        //ajout compteur
        static public $counter;

        const USER_ADMIN     = 1;
        const USER_WRITER    = 2;
        const USER_MODERATOR = 3;

        public function __construct ($id)
        {
            $this->_userId = $id;
        }
        public function getId ()
        {
            return $this->_userId;
        }
        public function setPrivilege ($code)
        {
            if (in_array($code, [self::USER_ADMIN, User::USER_WRITER, User::USER_MODERATOR])) {
                $this->privilege = $code;
            }
            return $this->privilege;
        }
        public function getPrivilege ()
        {
            return $this->privilege;
        }
        static public function setCounter ($counter)
        {
            User::$counter = $counter;
        }
        public static function getCounter ()
        {
            return self::$counter++;
        }
    }

    $objet = new User(5);
//    $objet = setPrivilege(User::USER_MODERATOR);
//    echo $objet->getPrivilege();
    echo '<br>';
    $objet2 = new User(8);
    $ss = new User(9);
    echo User::$counter;
