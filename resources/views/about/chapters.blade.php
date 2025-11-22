@extends('layouts.app')

@section('content')
  <!-- CHAPTER SYNOPSIS -->
  <section class="py-12" aria-labelledby="chapter-synopsis">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <h1 id="chapter-synopsis" class="text-3xl sm:text-4xl font-serif text-parchment mb-6">Chapter Synopsis</h1>
      <x-chapter-accordion :chapters="$chapters ?? []" />
    </div>
  </section>
@endsection
