<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function show(Level $level)
    {
        $posts  = $level->posts()->with('category', 'image', 'tags')->withCount('comments')->get();
        $videos = $level->videos()->with('category', 'image', 'tags')->withCount('comments')->get();

        return view('levels.show', compact('level', 'posts', 'videos'));
    }
}
