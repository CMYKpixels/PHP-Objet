<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 12/09/2016
     * Time: 11:13
     */

    namespace App;


    use Illuminate\Database\Eloquent\Model;

    class Post extends Model
    {
        protected $primaryKey = 'user_id';
        protected $table      = 'posts';
    }