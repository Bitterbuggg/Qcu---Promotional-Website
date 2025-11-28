@extends('layouts.app')

@section('content')
  <!-- Characters -->
  <section class="py-12" aria-labelledby="characters">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 id="characters" class="text-3xl sm:text-4xl font-serif text-parchment mb-6">Characters</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse(($characters ?? []) as $c)
          <x-character-card :character="$c" />
        @empty
          <p class="text-parchment">No characters yet.</p>
        @endforelse
      </div>
    </div>
  </section>
@endsection
