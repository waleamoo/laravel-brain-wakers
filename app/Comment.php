<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // fillables 
    protected $fillable = ['id', 'comment_body', 'comment_image', 'lecture_id', 'user_id'];

    public function lecture(){
        $this->belongsTo('App\Lecture');
    }

    public function replies(){
        $this->hasMany('App\Reply');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
    
}
