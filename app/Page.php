<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Notifiable;

    public function author()
    {
        $this->hasOne(User::class, 'created_by');
    }

    public function category()
    {
        $this->hasOne(Category::class);
    }

    public function posts(Builder $builder){
        return $builder->where('post', true);
    }

    public function live(Builder $builder){
        return $builder->where('published', true);
    }

    public function drafts(Builder $builder){
        return $builder->where('published', false);
    }
}
