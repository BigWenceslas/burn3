<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    public function categorie()
    {
        return $this->belongsTo(CategoriesBlog::class,'categorie_id');
    }

    public function auteur()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'article_id');
    }
}
