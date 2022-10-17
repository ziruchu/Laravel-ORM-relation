<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 一个用户对应一份资料
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // 一个用户有多篇文章
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // 一个用户有多个视频
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // 一个用户有多个评论
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * 用户与组的关系
     *
     * 一个用户可能有多个组，一个组可能有多个用户
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    // 一个用户属于一个级别
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /**
     * 多样化一对一关系
     *
     * 一个用户有一个头像
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * 远程一对一关系
     *
     * 一个用户对应一个国家
     */
    public function location()
    {
        return $this->hasOneThrough(Location::class, Profile::class);
    }

}
