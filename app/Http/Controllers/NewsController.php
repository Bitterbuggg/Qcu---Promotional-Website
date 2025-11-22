<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $today = date('Y-m-d');
        $lastWeek = date('Y-m-d', strtotime('-6 days'));
        $announcements = [
            ['title' => 'An Omen Stirs', 'excerpt' => 'Whispers echo from the Shattered Gate.', 'date' => $today, 'href' => route('news.show', 'an-omen-stirs')],
            ['title' => 'Sigil Fires Rekindled', 'excerpt' => 'Pilgrims return with sparks from the Oathforge.', 'date' => $lastWeek, 'href' => route('news.show', 'sigil-fires-rekindled')],
        ];
        return view('news.index', compact('announcements'));
    }

    public function show(string $slug): View
    {
        $announcement = [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'date' => date('M j, Y'),
            'content' => 'A longer telling of the omen, woven in ash and gold.'
        ];
        return view('news.show', compact('announcement'));
    }
}
