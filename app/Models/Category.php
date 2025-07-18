<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts() {
        return $this->hasMany(Post::class, 'category_id','id'); // У категории много постов
    }
}
