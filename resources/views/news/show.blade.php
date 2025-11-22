@extends('layouts.app')

@section('content')
  <!-- ANNOUNCEMENT DETAIL (OPTIONAL) -->
  <section class="py-12" aria-labelledby="announcement">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
      <h1 id="announcement" class="text-3xl sm:text-4xl font-serif text-parchment">{{ $announcement['title'] ?? 'Announcement' }}</h1>
      <p class="text-parchment text-sm mt-1">{{ $announcement['date'] ?? '' }}</p>
      <article class="prose mt-6">
        <p>{{ $announcement['content'] ?? 'Details coming soon.' }}</p>
      </article>
    </div>
  </section>
@endsection
