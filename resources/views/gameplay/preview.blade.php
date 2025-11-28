@extends('layouts.app')

@section('content')
  <!-- Game preview -->
  <section class="py-12" aria-labelledby="game-preview">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
      <h1 id="game-preview" class="text-3xl sm:text-4xl font-serif text-parchment">Game Preview</h1>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <img src="/images/preview-1.svg" alt="Gameplay preview 1" class="w-full h-auto rounded border border-forest/40"/>
        <img src="/images/preview-2.svg" alt="Gameplay preview 2" class="w-full h-auto rounded border border-forest/40"/>
        <img src="/images/preview-3.svg" alt="Gameplay preview 3" class="w-full h-auto rounded border border-forest/40"/>
      </div>
      <!-- Optional video placeholder -->
      <div class="mt-8 aspect-video rounded overflow-hidden border border-forest/40 bg-abyss/60 grid place-items-center text-parchment">
        <!-- Add a video embed or mp4 here -->
        <span>Trailer placeholder</span>
      </div>
    </div>
  </section>
@endsection
