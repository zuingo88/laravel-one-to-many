<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;
use App\Detail;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function posts() {

        return $this->hasMany(Post::class);  //COLLEGO UN TAG A MOLTI POST (per questo function 'posts' plurale)
    }
}
