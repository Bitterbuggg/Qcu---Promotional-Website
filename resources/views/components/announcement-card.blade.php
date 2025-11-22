@props(['announcement' => ['title' => 'An Omen Stirs', 'excerpt' => 'Whispers echo from the Shattered Gate.', 'date' => '2025-11-20', 'href' => '#']])

<article class="group rounded-lg border border-forest/40 bg-abyss/60 p-4 hover:border-gold transition" data-sr="fade-up">
  <div class="flex items-start justify-between gap-4">
    <div>
      <h3 class="font-serif text-parchment group-hover:text-gold transition">{{ $announcement['title'] }}</h3>
      <p class="text-parchment text-sm mt-1">{{ $announcement['excerpt'] }}</p>
    </div>
    <time datetime="{{ $announcement['date'] }}" class="text-gold text-xs">{{ $announcement['date'] }}</time>
  </div>
  <a href="{{ $announcement['href'] }}" class="inline-block mt-3 text-gold hover:text-gold-soft">Read more →</a>
</article>
