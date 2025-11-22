@props(['chapters' => []])

<!-- CHAPTER ACCORDION -->
<div class="divide-y divide-forest/30 border border-forest/40 rounded-lg bg-abyss/60" data-sr="fade-in">
  @foreach($chapters as $index => $ch)
    <details @if($index===0) open @endif class="group">
      <summary class="cursor-pointer list-none px-4 py-3 flex items-center justify-between hover:bg-forest/30">
        <div>
          <h4 class="font-serif text-parchment">{{ $ch['title'] }}</h4>
          <p class="text-parchment text-sm">{{ $ch['summary'] }}</p>
        </div>
        <span class="ml-4 text-gold">▾</span>
      </summary>
      <div class="px-4 pb-4 text-parchment">
        <p>{{ $ch['content'] }}</p>
      </div>
    </details>
  @endforeach
  @if(empty($chapters))
    <div class="px-4 py-3 text-parchment">No chapters available.</div>
  @endif
</div>
