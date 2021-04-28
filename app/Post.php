<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
    protected $fillable = ['user_id', 'parent_id', 'thumbnail', 'title', 'slug', 'sub_title', 'details', 'post_type', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    }
