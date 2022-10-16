<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * 多化样封面图片中间层
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
