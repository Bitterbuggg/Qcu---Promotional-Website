@props(['member' => ['name' => 'Aria Nightfall', 'role' => 'Lore Keeper', 'bio' => 'Weaves the histories of QCU into living myth.', 'image' => '/images/team/aria.jpg']])

<article class="rounded-lg border border-forest/40 bg-abyss/60 overflow-hidden" data-sr="fade-up">
  <div class="aspect-square overflow-hidden">
    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="h-full w-full object-cover" />
  </div>
  <div class="p-4">
    <h3 class="font-serif text-parchment">{{ $member['name'] }}</h3>
    <p class="text-gold text-sm">{{ $member['role'] }}</p>
    <p class="text-parchment text-sm mt-2">{{ $member['bio'] }}</p>
  </div>
</article>
