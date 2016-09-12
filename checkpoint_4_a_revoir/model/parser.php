<?php
    class parser
    {
        public function parseGetData()
        {
            $file = './config/config.xml';
            $xml = simplexml_load_file($file);

        $data['user'] = (string) $xml->user;
        $data['password'] = (string) $xml->password;
        $data['database'] = (string) $xml->blog;

        return $data;
        
        }
    }