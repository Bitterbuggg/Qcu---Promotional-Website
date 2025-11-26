@extends('layouts.app')

@section('content')
  <!-- Hero section -->
    <x-hero :image="'/images/sakuraqcu.jpg'"
            title="Shadows in the QCU Network"
            subtitle="Glitches spread. Arius steps in to defend the campus." />

    <!-- Introduction -->
    <section class="py-12" aria-labelledby="introduction" data-sr="fade-in">
      <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <h2 id="introduction" class="font-serif text-2xl text-parchment mb-4">Introduction</h2>
        <p class="text-parchment leading-relaxed">When strange glitches and data leaks begin spreading across Quezon City University, one curious student—Arius—discovers that something sinister is manipulating the campus network. Guided by quick thinking and cyber awareness, Arius must defeat the malware creatures infecting each area of campus. Behind every flicker and false login lies Cipher, an intelligent force controlling the Shadow Network.</p>
        <p class="text-parchment mt-4 leading-relaxed">Only through smart choices, sharp eyes, and cyber hygiene can Arius restore safety to QCU.</p>
      </div>
    </section>

  <!-- Quick links -->
  <section class="py-12" aria-labelledby="quick-links">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 id="quick-links" class="sr-only">Quick Links</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <a href="{{ route('about.index') }}" class="group rounded-lg border border-forest/40 p-6 bg-abyss/60 hover:border-gold transition" data-sr="fade-up">
          <h3 class="font-serif text-parchment group-hover:text-gold">About</h3>
          <p class="text-parchment text-sm mt-1">Read the game synopsis, chapters, characters, and explore the QCU land map.</p>
        </a>
        <a href="{{ route('gameplay.index') }}" class="group rounded-lg border border-forest/40 p-6 bg-abyss/60 hover:border-gold transition" data-sr="fade-up">
          <h3 class="font-serif text-parchment group-hover:text-gold">Gameplay</h3>
          <p class="text-parchment text-sm mt-1">Preview, mechanics, and a direct link to the game.</p>
        </a>
        <a href="{{ route('news.index') }}" class="group rounded-lg border border-forest/40 p-6 bg-abyss/60 hover:border-gold transition" data-sr="fade-up">
          <h3 class="font-serif text-parchment group-hover:text-gold">News</h3>
          <p class="text-parchment text-sm mt-1">Announcements and updates from the realm.</p>
        </a>
      </div>
    </div>
  </section>
@endsection
