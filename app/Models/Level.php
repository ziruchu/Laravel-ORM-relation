<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    // 一个级别有多个用户
    public function levels()
    {
        return $this->hasMany(User::class);
    }
}
