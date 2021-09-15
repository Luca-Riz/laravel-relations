<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id' //? aggiunta questa riga dopo migrations/update_posts_table
    ];

    public function postCategory(){
        return $this->hasMany('App\Category');
    }
}
