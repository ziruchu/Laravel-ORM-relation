<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * 自定义多样化对多对关系
     *
     *  一个标签有多篇文章
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * 自定义多样化对多对关系
     *
     *  一个标签有多个视频
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }

}
