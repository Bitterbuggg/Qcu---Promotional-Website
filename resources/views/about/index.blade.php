@extends('layouts.app')

@section('content')
  <!-- ABOUT OVERVIEW -->
  <section class="py-12" aria-labelledby="about-overview">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <header class="mb-6">
        <h1 id="about-overview" class="text-3xl sm:text-4xl font-serif text-parchment">About QCU</h1>
        <p class="mt-2 text-parchment">A world forged in twilight, where oaths bind fate.</p>
      </header>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('about.synopsis') }}">Game Synopsis</a>
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('about.chapters') }}">Chapter Synopsis</a>
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('about.characters') }}">Characters</a>
        <a class="rounded-lg border border-forest/40 bg-abyss/60 p-5 hover:border-gold transition" href="{{ route('about.map') }}">QCU Land Map</a>
      </div>
    </div>
  </section>
@endsection
