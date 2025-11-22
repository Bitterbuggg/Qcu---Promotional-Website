@props(['character' => ['name' => 'The Warden', 'title' => 'Keeper of the Gate', 'image' => '/images/characters/warden.jpg', 'blurb' => 'A silent sentinel sworn to ancient oaths.']])

<article class="group overflow-hidden rounded-lg border border-forest/40 bg-abyss/60 shadow-lg hover:border-gold transition" data-sr="fade-up">
  <div class="aspect-[16/10] overflow-hidden">
    <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}" class="h-full w-full object-cover group-hover:scale-[1.03] transition duration-500" />
  </div>
  <div class="p-4">
    <h3 class="font-serif text-xl text-parchment">{{ $character['name'] }}</h3>
    <p class="text-gold text-sm">{{ $character['title'] }}</p>
    <p class="mt-2 text-parchment/80 text-sm">{{ $character['blurb'] }}</p>
  </div>
</article>
