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

class Device {
    public $name;           // the name of the device
    public $battery;        // holds a Battery object
    public $data = array(); // stores misc. data in an array
    public $connection;     // holds some connection resource

    protected function connect() {
        // connect to some external network
        $this->connection = 'resource';
        echo $this->name . ' connected' . PHP_EOL;
    }

    protected function disconnect() {
        // safely disconnect from network
        $this->connection = null;
        echo $this->name . ' disconnected' . PHP_EOL;
    }
}

class Battery
{
    private $charge = 0;
    private $price;

    public function __construct(){
        echo "this is the class".__CLASS__;
        echo "</br>";
    }


    public function __destruct(){
        echo "this is the destructor".__CLASS__;
        echo "</br>";
    }

    public function setCharge($charge)
    {
        $charge = (int)$charge;
        if ($charge < 0) {
            $charge = 0;
        } elseif ($charge > 100) {
            $charge = 100;
        }
        $this->charge = $charge;
    }
}

$battey = new Battery;
