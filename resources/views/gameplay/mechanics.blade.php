@extends('layouts.app')

@section('content')
  <!-- GAME MECHANICS -->
  <section class="py-12" aria-labelledby="game-mechanics">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 id="game-mechanics" class="text-3xl sm:text-4xl font-serif text-parchment">Game Mechanics</h1>
      <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- INFO CARD -->
        <div class="rounded-lg border border-forest/40 bg-abyss/60 p-5" data-sr="fade-up">
          <h3 class="font-serif text-parchment">Sigil Weaving</h3>
          <p class="text-parchment text-sm mt-2">Bind runes in sacred patterns to awaken forgotten powers.</p>
        </div>
        <div class="rounded-lg border border-forest/40 bg-abyss/60 p-5" data-sr="fade-up">
          <h3 class="font-serif text-parchment">Oath Bound</h3>
          <p class="text-parchment text-sm mt-2">Pledge to factions; your vows shape the realm’s response.</p>
        </div>
        <div class="rounded-lg border border-forest/40 bg-abyss/60 p-5" data-sr="fade-up">
          <h3 class="font-serif text-parchment">Echoes</h3>
          <p class="text-parchment text-sm mt-2">Relive memories at shrines to glean secrets of the Crown.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
