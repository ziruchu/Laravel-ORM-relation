<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // 视频属于用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 分类属于视频
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 多样化一对多关系
     *
     * 一个视频有多个评论
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * 多样化一对一关系
     *
     * 一个视频有一个封面图片
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
