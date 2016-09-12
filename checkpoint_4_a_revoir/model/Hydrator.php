<?php

abstract class Hydrator
{
    /*
     * Ici implementer votre propre strategie d'assignement de valeur qui marche
     * cela dépendra des nom de vos colonnes en base de données avec le nom des
     * méthodes setters dans votre entité(class) cible. Et oui si ça ne marche pas
     * c'est surement ici que vous devez debugger.
     */
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