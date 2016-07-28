<?php

/****
 * Interceptors - magic methods
 *
 * -executed in response to PHP events
 * -name prepended with two underscores
 *
 * why use a magic method?
 * -trigger custom behaviour
 * -attempt to accessing a missing property
 * -customize object creation
 * -set defaults like current time
 *
 * why not?
 * 3-20 times slower than method calls
 * -ignores scope
 * -breaks IDE code completion
 * -Lack of documentation from the PHP team
 */

class Person {
    public $_name;
    private $_age;

    function __set( $property, $value ) {
        $property = ucfirst($property);
        $method = "set{$property}";
        if ( method_exists( $this, $method ) ) {
            return $this->$method( $value );
        }
    }


    function setName( $name ) {
        $this->_name = $name;
        if ( ! is_null( $name ) ) {
            $this->_name = strtoupper($this->_name);
        }
    }

    function setAge( $age ) {
        $this->_age =  strtoupper($age);
    }
}


$p = new Person();
$p->name = "bob";

echo $p->_age;

?>