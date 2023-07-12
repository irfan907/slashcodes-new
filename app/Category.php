<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{
    public function posts()
    {
        return $this->belongsToMany('\App\Post')
        ->published()
        ->orderBy('created_at', 'DESC');
    }
    public function author()
    {
        return $this->belongsTo('\App\User', 'author_id', 'id');
    }
}
