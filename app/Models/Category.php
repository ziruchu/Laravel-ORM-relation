<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 一个分类有多篇文章
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // 一个分类有多个视频
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
