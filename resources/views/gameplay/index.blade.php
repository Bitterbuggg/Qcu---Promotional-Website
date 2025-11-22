@extends('layouts.app')

@section('content')
  <!-- GAMEPLAY OVERVIEW -->
  <section class="py-12" aria-labelledby="gameplay-overview">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 id="gameplay-overview" class="text-3xl sm:text-4xl font-serif text-parchment">Gameplay</h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('gameplay.link') }}">Game Hyperlink</a>
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('gameplay.preview') }}">Game Preview</a>
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('gameplay.mechanics') }}">Game Mechanics</a>
      </div>
    </div>
  </section>
@endsection
