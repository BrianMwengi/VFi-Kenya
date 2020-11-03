<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'title', 'slug', 'sub_title', 'details', 'event_type', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
