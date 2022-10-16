<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $posts  = $user->posts()->with('category')->withCount('comments')->get();
        $videos = $user->videos()->with('category')->withCount('comments')->get();

        return view('users.show', compact('user', 'posts', 'videos'));
    }
}
