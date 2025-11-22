@extends('layouts.app')

@section('content')
  <!-- QCU LAND MAP -->
  <section class="py-12" aria-labelledby="qcu-map">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
      <h1 id="qcu-map" class="text-3xl sm:text-4xl font-serif text-parchment mb-6">QCU Land Map</h1>
      <div class="rounded-lg border border-forest/40 bg-abyss/60 overflow-hidden">
        <!-- Show real sitemap.png if present; otherwise fallback to placeholder sitemap.svg -->
        <img src="/images/sitemap.svg" alt="QCU World Map placeholder" class="w-full h-auto" />
      </div>
    </div>
  </section>
@endsection
