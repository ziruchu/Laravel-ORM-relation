<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 评论属于用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 多化样评论中间层
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
