<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Tweet;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Tweets()
    {
        return $this->hasMany(Tweet::class,'author_id');
    }

    public function Likes()
    {
        return $this->belongsToMany(Tweet::class,'tweet_likes');
    }

    public function following()
    {
        return $this->belongsToMany(User::class,'follow', 'user_id', 'follower_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class,'follow', 'follower_id', 'user_id');
    }
}
