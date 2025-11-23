@props([
  'title' => 'Enter the Realm of QCU',
  'subtitle' => 'A pilgrimage through shadow and gold.',
  'cta' => ['label' => 'Begin Your Journey', 'href' => route('about.index')],
  'image' => '/images/sakuraqcu.jpg',
])

<!-- HERO SECTION -->
<section class="relative min-h-[68vh] grid place-items-center overflow-hidden">
  <img src="{{ $image }}" alt="Hero background" class="absolute inset-0 w-full h-full object-cover object-[50%_15%] md:object-[50%_20%] opacity-60" />
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 mx-auto max-w-4xl px-6 text-center">
    <h1 data-hero="title" class="opacity-0 translate-y-3 font-serif font-extrabold whitespace-nowrap overflow-visible max-w-[95vw] mx-auto text-white dark:text-white leading-tight text-[clamp(1.3rem,7vw,3.5rem)] sm:text-[clamp(1.8rem,5.5vw,4.2rem)] lg:text-[clamp(2.6rem,4vw,5rem)]">{{ $title }}</h1>
    <p data-hero="subtitle" class="opacity-0 translate-y-3 mt-4 overflow-visible max-w-[90vw] mx-auto whitespace-nowrap text-white/80 dark:text-white/80 leading-snug text-[clamp(.75rem,2.6vw,1.1rem)] sm:text-[clamp(.85rem,2.2vw,1.2rem)] lg:text-[clamp(.95rem,1.8vw,1.3rem)]">{{ $subtitle }}</p>
    @if($cta)
      <div class="mt-8">
        <a data-hero="cta" href="{{ $cta['href'] }}" class="opacity-0 translate-y-3 inline-block px-6 py-3 rounded border border-gold text-gold hover:bg-gold hover:text-ink transition">{{ $cta['label'] }}</a>
      </div>
    @endif
  </div>
</section>
