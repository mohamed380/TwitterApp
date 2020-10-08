<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Tweet extends Model
{
    use HasFactory;

    public function Author()
    {
        $this->belongsTo(User::class,'author_id');
    }

    public function Likes()
    {
        $this->belongsToMany(User::class,'tweet_likes');
    }

    public function Tags()
    {
        $this->belongsToMany(Tag::class,'tweet_tag');
    }


}
