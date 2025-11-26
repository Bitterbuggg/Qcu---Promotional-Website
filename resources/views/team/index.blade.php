@extends('layouts.app')

@section('content')
  <!-- The team -->
  <section class="py-12" aria-labelledby="the-team">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h1 id="the-team" class="text-3xl sm:text-4xl font-serif text-parchment">The Team</h1>
      <p class="text-parchment mt-2">Those who tend the Crown.</p>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse(($members ?? []) as $m)
          <x-team-member-card :member="$m" />
        @empty
          <p class="text-parchment">No members to show yet.</p>
        @endforelse
      </div>
    </div>
  </section>
@endsection
