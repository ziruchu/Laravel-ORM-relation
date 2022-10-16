<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * 用户与组与用户的关系
     *
     * 一个组有多个用户，多个用户可能有一个组
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
