<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 文章属于用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 分类属于文章
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 多样化一对多关系
     *
     * 一篇文章有多个评论
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * 多样化一对一关系
     *
     * 一篇文章有一个封面图片
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * 多样化多对多关系
     *
     * 一篇文章可以有多个标签
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
