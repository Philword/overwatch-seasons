<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use App\Post;

class Post extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function authorId()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function getRouteKeyName()
    {
        return 'id';
    }
}
