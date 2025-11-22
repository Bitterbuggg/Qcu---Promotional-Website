@props([
  'title' => 'Enter the Realm of QCU',
  'subtitle' => 'A pilgrimage through shadow and gold.',
  'cta' => ['label' => 'Begin Your Journey', 'href' => route('about.index')],
  'image' => '/images/hero.svg',
])

<!-- HERO SECTION -->
<section class="relative min-h-[68vh] grid place-items-center overflow-hidden">
  <img src="{{ $image }}" alt="Hero background" class="absolute inset-0 w-full h-full object-cover opacity-60" />
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 mx-auto max-w-4xl px-6 text-center">
    <h1 data-hero="title" class="opacity-0 translate-y-3 text-4xl sm:text-5xl lg:text-6xl font-serif text-parchment">{{ $title }}</h1>
    <p data-hero="subtitle" class="opacity-0 translate-y-3 mt-4 text-parchment/80 text-base sm:text-lg">{{ $subtitle }}</p>
    @if($cta)
      <div class="mt-8">
        <a data-hero="cta" href="{{ $cta['href'] }}" class="opacity-0 translate-y-3 inline-block px-6 py-3 rounded border border-gold text-gold hover:bg-gold hover:text-ink transition">{{ $cta['label'] }}</a>
      </div>
    @endif
  </div>
</section>
