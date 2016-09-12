<?php

    class bddMySQLi implements DatabaseInterface
    {
        protected $db;

        public
        function __construct()
        {

        }

        public
        function query($query, array $array)
        {
            // TODO: Implement query() method.
        }

        public
        function select($query, array $array, $fetchAll)
        {
            // TODO: Implement select() method.
        }

        public
        function update($query, array $array)
        {
            // TODO: Implement update() method.
        }

        public
        function delete($query, array $array)
        {
            // TODO: Implement delete() method.
        }

        public
        function insert($query, array $array)
        {
            // TODO: Implement insert() method.
        }

        public
        function disconnect()
        {
            // TODO: Implement disconnect() method.
        }
    }