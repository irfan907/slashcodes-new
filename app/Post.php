<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{
    public function categories()
    {
        return $this->belongsToMany('\App\Category');
    }
    public function author()
    {
        return $this->belongsTo('\App\User', 'author_id', 'id');
    }

}
