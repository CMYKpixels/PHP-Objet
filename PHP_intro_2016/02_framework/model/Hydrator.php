<?php

/**
 * Created by PhpStorm.
 * User: Alfonso
 * Date: 7/20/2016
 * Time: 21:31 PM
 */
abstract class Hydrator
{
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