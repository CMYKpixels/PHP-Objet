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
            protected $primaryKey = 'id';
            protected $table      = 'posts';
            protected $fillable   = array('title', 'content', 'user_id');
            public    $timestamps = TRUE;

            public function Author()
                {
                    return $this->belongsTo('User', 'user_id');
                }
        }