@extends('layouts.app')

@section('content')
  <!-- NEWS & UPDATES -->
  <section class="py-12" aria-labelledby="news">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <h1 id="news" class="text-3xl sm:text-4xl font-serif text-parchment">Announcements</h1>
      <div class="mt-6 space-y-4">
        @forelse(($announcements ?? []) as $a)
          <x-announcement-card :announcement="$a" />
        @empty
          <p class="text-parchment">No announcements yet.</p>
        @endforelse
      </div>
    </div>
  </section>
@endsection
