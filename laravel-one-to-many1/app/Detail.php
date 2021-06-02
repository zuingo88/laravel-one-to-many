<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class Detail extends Model
{
    protected $fillable = [
        'argument',
        'likes',
    ];

    public function tag() {
        return $this->hasOne(Tag::class);
    }

    public function post() {
        return $this->hasOne(Post::class); //COLLEGO UN DETAIL AD UN POST
    }
}
