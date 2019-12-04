<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    // 关联用户
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
