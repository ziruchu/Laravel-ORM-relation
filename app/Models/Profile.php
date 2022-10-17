<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Profile extends Model
{
    use HasFactory;

    // 一份资料属于一个用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 一个用户资料对应一个国家
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function gender(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value = 0 ? '女' : '男',
        );
    }
}
