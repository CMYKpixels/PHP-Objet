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
    function __get( $property ) {
        $property = ucfirst($property);
        $method = "get{$property}";
        if ( method_exists( $this, $method ) ) {
            return $this->$method();
        }
    }

    function getName() {
        return "Bob";
    }

    function getAge() {
        return 44;
    }
}


$p = new Person();
print $p->age;
