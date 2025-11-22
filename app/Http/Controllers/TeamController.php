<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TeamController extends Controller
{
    public function index(): View
    {
        $members = [
            ['name' => 'Aria Nightfall', 'role' => 'Lore Keeper', 'bio' => 'Weaves the histories of QCU into living myth.', 'image' => '/images/team/aria.svg'],
            ['name' => 'Kellan Thorne', 'role' => 'World Architect', 'bio' => 'Shapes the contours where stories take root.', 'image' => '/images/team/kellan.svg'],
            ['name' => 'Mira Vale', 'role' => 'Artisan of Echoes', 'bio' => 'Gives faces to whispers and form to dreams.', 'image' => '/images/team/mira.svg'],
        ];
        return view('team.index', compact('members'));
    }
}
