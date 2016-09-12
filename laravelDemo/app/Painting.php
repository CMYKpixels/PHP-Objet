<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Painting extends Model
    {
        protected $primaryKey = 'id';
        protected $table      = 'paintings';
    }
