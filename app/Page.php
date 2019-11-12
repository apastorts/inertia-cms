<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function author()
    {
        $this->hasOne(User::class, 'created_by');
    }

    public function category()
    {
        $this->hasOne(Category::class);
    }

    public function scopePosts($query){
        return $query->where('post', true);
    }

    public function scopeLive($query){
        return $query->where('published', true);
    }

    public function scopeDrafts($query){
        return $query->where('published', false);
    }
}
