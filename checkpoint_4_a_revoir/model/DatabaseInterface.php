<?php

interface DatabaseInterface{

    public function select($query,array $array,$fetchAll);

    public function insert($query,array $array);

    public function update($query,array $array);

    public function delete($query,array $array);

    public function query($query,array $array);

    public function disconnect();
}