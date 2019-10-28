<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Notifiable;

    public function pages()
    {
        $this->hasMany(Page::class);
    }
}
