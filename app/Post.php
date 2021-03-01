<?php

namespace App;
// use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
        'img_path'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }

}
