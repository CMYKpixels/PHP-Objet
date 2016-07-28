<?php

class Core{

    static public function coreInit(){
        self::addIncludePath(dirname(dirname(__FILE__)));
        self::addIncludePath(dirname(__FILE__));
        self::autoloader();

        Amslib_Router::initialise();
        $dir = dirname(dirname(__FILE__));
        Amslib_Router::load("$dir/router.xml","xml","application");
        Amslib_Router::finalise();

        $resource = Amslib_Router::getResource();
        $name = Amslib_Router::getName();

        switch ($name){
            case "home":
                self::requireFile($resource);
                break;
        }
    }

    static public function addIncludePath($path) {
        /* ini_get contains all the path as being the current one-->becoming a "SUPER PATH"
          it is in fact a super containing all universal paths. */
        $includePath = explode(PATH_SEPARATOR, ini_get("include_path"));

        /* if the path is already in the previous array $valid will be false */
        $valid = true;
        foreach ($includePath as $p) {
            /*binary string comparison, if the string is the same then false
              it means the path is already registered*/
            if (strcmp($path, $p) == 0)
                $valid = false;
        }


        /* if valid is true include the path in the array and set the array as the configuration */
        if ($valid)
            array_unshift($includePath, $path);
        ini_set("include_path", implode(PATH_SEPARATOR, $includePath));
    }

    static public function autoloader(){

        function autoload($class_name){

            if(strpos($class_name,"Amslib_Router") !== false){
                $class_name = "router/$class_name";
            }
            if(strpos($class_name,"Amslib_File") !== false){
                $class_name = "file/$class_name";
            }
            if (strpos($class_name, "Amslib_QueryPath") !== false)
                $class_name = "util/$class_name";
            $filename = str_replace("//", "/", "$class_name.php");
            return Core::requireFile($filename);

        }

        spl_autoload_register('autoload');
    }

    static public function requireFile($file, $data = array()) {
        if (!is_string($file))
            return false;

        $path = "";

        if (!file_exists($file)) {
            $path = self::findPath($file);
            if ($path !== false && strlen($path))
                $path = "$path/";
        }

        /* 	NOTE: Cannot use Amslib_File::reduceSlashes here, chicken/egg type problem */
        $file = preg_replace('#//+#', '/', "{$path}$file");

        if (is_file($file) && file_exists($file)) {
            if (is_array($data) && count($data))
                extract($data, EXTR_SKIP);

            if (isset($data["require_once"]))
                return require_once($file);
            return require($file);
        }

        return false;
    }

    static protected function findPath($filename) {
        $includePath = explode(PATH_SEPARATOR, ini_get("include_path"));

        foreach ($includePath as $path) {
            /* 	NOTE: Cannot use Amslib_File::reduceSlashes here, chicken/egg type problem */
            $test = preg_replace('#//+#', '/', "$path/$filename");
            if (@file_exists($test))
                return $path;
        }

        return false;
    }
}