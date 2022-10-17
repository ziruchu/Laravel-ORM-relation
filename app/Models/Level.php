<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    // 一个级别有多个用户
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * 远程一对多关系
     *
     * 该级别下的用户发布了多少篇文章
     */
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }

    /**
     * 远程一对多关系
     *
     * 该级别下的用户发布了多少篇视频
     */
    public function videos()
    {
        return $this->hasManyThrough(Video::class, User::class);
    }
}
