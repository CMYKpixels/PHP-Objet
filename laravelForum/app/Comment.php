<?php

namespace App;

    use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $primaryKey = 'id';
    protected $table      = 'comments';
    protected $fillable   = array('title', 'content', 'user_id');
    public    $timestamps = TRUE;

    public function Author()
    {
        return $this->belongsTo('User', 'user_id');
    }
}
