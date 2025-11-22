<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('about.index');
    }

    public function synopsis(): View
    {
        return view('about.synopsis');
    }

    public function chapters(): View
    {
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
    }

    public function characters(): View
    {
        $characters = [
            ['name' => 'Arius', 'title' => 'The Student Defender', 'image' => '/images/characters/warden.svg', 'blurb' => 'A curious Quezon City University student who dives into the digital world to uncover threats. Armed with logic, quick reflexes, and rising cyber awareness.'],
            ['name' => 'Slybyte', 'title' => 'The Spyware Sneak', 'image' => '/images/characters/lysa.svg', 'blurb' => 'A tiny data snooper feeding on weak passwords, unlocked screens, and exposed information. Tests personal cyber hygiene.'],
            ['name' => 'Phisher', 'title' => 'The Phishing Trickster', 'image' => '/images/characters/eldric.svg', 'blurb' => 'Disguises itself as trusted emails and academic resources; thrives on deception and careless clicks.'],
            ['name' => 'Middlix', 'title' => 'The Network Worm', 'image' => '/images/characters/lysa.svg', 'blurb' => 'Intercepts data mid-transit in public Wi-Fi zones, replicating through vulnerable paths with glitchy motion.'],
            ['name' => 'Encryphor', 'title' => 'The Ransom Warden', 'image' => '/images/characters/eldric.svg', 'blurb' => 'A cold entity forged from encrypted fragments; locks files and demands control, embodying ransomware danger.'],
            ['name' => 'Cipher', 'title' => 'Mastermind of the Shadow Network', 'image' => '/images/characters/warden.svg', 'blurb' => 'Adaptive AI manipulating data, systems, and students—always one move ahead, orchestrating every threat.'],
        ];
        return view('about.characters', compact('characters'));
    }

    public function map(): View
    {
        return view('about.map');
    }
}
