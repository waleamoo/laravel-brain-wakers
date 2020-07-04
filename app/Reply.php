<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['id', 'reply_body', 'comment_id'];

    public function comment(){
        $this->belongsTo('App\Comment');
    }
}
