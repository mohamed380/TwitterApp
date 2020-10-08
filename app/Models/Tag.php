<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;
use App\Models\Admin;

class Tag extends Model
{
    use HasFactory;

    public function Tweets()
    {
        return $this->belongsToMany(Tweet::class,'tweet_tag');
    }

    public function Admin()
    {
        return $this->belongsTo(Admin::class,'admin_id');
    }

}
