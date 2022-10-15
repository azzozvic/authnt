<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    protected $fillable = [
      'user_id', 'title','content','photo','slug'
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }
}
