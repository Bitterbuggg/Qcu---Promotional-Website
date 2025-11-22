<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GameplayController extends Controller
{
    public function index(): View
    {
        return view('gameplay.index');
    }

    public function link(): View
    {
        return view('gameplay.link');
    }

    public function preview(): View
    {
        return view('gameplay.preview');
    }

    public function mechanics(): View
    {
        return view('gameplay.mechanics');
    }
}
