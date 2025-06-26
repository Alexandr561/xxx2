<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use Filterable;
    use SoftDeletes;
    protected $table = 'posts';
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id'); // Пост принадлежит категории
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}



