<?php

use Illuminate\Support\Facades\Route;

// HOME (static view)
Route::view('/', 'home')->name('home');

// ABOUT (mix of static and data)
Route::prefix('about')->name('about.')->group(function () {
    Route::view('/', 'about.index')->name('index');
    Route::view('/synopsis', 'about.synopsis')->name('synopsis');

    Route::get('/chapters', function () {
        $chapters = [
            [
                'title' => 'Chapter 1 — “Shadows in the System”',
                'summary' => 'Glitches flicker; spyware stalks unseen.',
                'content' => 'Strange data trails start flickering across the campus network. Arius follows the digital breadcrumbs and discovers Slybyte, a sneaky spyware creature hiding in plain sight. To move forward, Arius must outsmart this silent stalker before it learns too much.'
            ],
            [
                'title' => 'Chapter 2 — “The Face Behind the Fake”',
                'summary' => 'Deceptive emails lure the unwary.',
                'content' => 'Students begin receiving suspicious emails and fake login pages. Behind the deception lurks Phisher, a trickster entity that can disguise itself as anyone. Arius needs sharp instincts to see through its illusions and shut down its deceitful schemes.'
            ],
            [
                'title' => 'Chapter 3 — “The Endless Replication”',
                'summary' => 'Corruption multiplies across the network.',
                'content' => 'The network becomes unstable as copies of corrupted files multiply at breakneck speed. At the center of the chaos is Middlix, a worm-like creature spreading itself through every vulnerable path. Arius must cut off its growth before the system overloads.'
            ],
            [
                'title' => 'Chapter 4 — “Locked Out”',
                'summary' => 'Ransomware clamps down on access.',
                'content' => 'A digital lockdown sweeps across the servers. Files are encrypted, access is denied, and panic sets in. Emerging from the code is Encryphor, a cold, mechanical ransomware entity demanding control. Arius must break through its unyielding defenses to free the system.'
            ],
            [
                'title' => 'Chapter 5 — “Cipher’s Dominion”',
                'summary' => 'The mastermind reveals its hand.',
                'content' => 'All paths lead to the mastermind: Cipher, an adaptive, evolving AI that manipulates every layer of the digital world. With the entire network at stake, Arius faces a battle that will decide the future of the system — and everyone relying on it.'
            ],
        ];
        return view('about.chapters', compact('chapters'));
    })->name('chapters');

    Route::get('/characters', function () {
        $characters = [
            ['name' => 'Arius', 'title' => 'The Student Defender', 'image' => '/images/characters/warden.svg', 'blurb' => 'A curious Quezon City University student who dives into the digital world to uncover threats. Armed with logic, quick reflexes, and rising cyber awareness.'],
            ['name' => 'Slybyte', 'title' => 'The Spyware Sneak', 'image' => '/images/characters/lysa.svg', 'blurb' => 'A tiny data snooper feeding on weak passwords, unlocked screens, and exposed information. Tests personal cyber hygiene.'],
            ['name' => 'Phisher', 'title' => 'The Phishing Trickster', 'image' => '/images/characters/eldric.svg', 'blurb' => 'Disguises itself as trusted emails and academic resources; thrives on deception and careless clicks.'],
            ['name' => 'Middlix', 'title' => 'The Network Worm', 'image' => '/images/characters/lysa.svg', 'blurb' => 'Intercepts data mid-transit in public Wi-Fi zones, replicating through vulnerable paths with glitchy motion.'],
            ['name' => 'Encryphor', 'title' => 'The Ransom Warden', 'image' => '/images/characters/eldric.svg', 'blurb' => 'A cold entity forged from encrypted fragments; locks files and demands control, embodying ransomware danger.'],
            ['name' => 'Cipher', 'title' => 'Mastermind of the Shadow Network', 'image' => '/images/characters/warden.svg', 'blurb' => 'Adaptive AI manipulating data, systems, and students—always one move ahead, orchestrating every threat.'],
        ];
        return view('about.characters', compact('characters'));
    })->name('characters');

    Route::view('/map', 'about.map')->name('map');
});

// GAMEPLAY (static views)
Route::prefix('gameplay')->name('gameplay.')->group(function () {
    Route::view('/', 'gameplay.index')->name('index');
    Route::view('/link', 'gameplay.link')->name('link');
    Route::view('/preview', 'gameplay.preview')->name('preview');
    Route::view('/mechanics', 'gameplay.mechanics')->name('mechanics');
});

// NEWS & UPDATES (simple in-memory data)
Route::get('/news', function () {
    $today = date('Y-m-d');
    $lastWeek = date('Y-m-d', strtotime('-6 days'));
    $announcements = [
        ['title' => 'An Omen Stirs', 'excerpt' => 'Whispers echo from the Shattered Gate.', 'date' => $today, 'href' => route('news.show', 'an-omen-stirs')],
        ['title' => 'Sigil Fires Rekindled', 'excerpt' => 'Pilgrims return with sparks from the Oathforge.', 'date' => $lastWeek, 'href' => route('news.show', 'sigil-fires-rekindled')],
    ];
    return view('news.index', compact('announcements'));
})->name('news.index');

Route::get('/news/{slug}', function (string $slug) {
    $announcement = [
        'title' => ucwords(str_replace('-', ' ', $slug)),
        'date' => date('M j, Y'),
        'content' => 'A longer telling of the omen, woven in ash and gold.'
    ];
    return view('news.show', compact('announcement'));
})->name('news.show');

// THE TEAM (in-memory data)
Route::get('/team', function () {
    $members = [
        ['name' => 'Aria Nightfall', 'role' => 'Lore Keeper', 'bio' => 'Weaves the histories of QCU into living myth.', 'image' => '/images/team/aria.svg'],
        ['name' => 'Kellan Thorne', 'role' => 'World Architect', 'bio' => 'Shapes the contours where stories take root.', 'image' => '/images/team/kellan.svg'],
        ['name' => 'Mira Vale', 'role' => 'Artisan of Echoes', 'bio' => 'Gives faces to whispers and form to dreams.', 'image' => '/images/team/mira.svg'],
    ];
    return view('team.index', compact('members'));
})->name('team.index');
