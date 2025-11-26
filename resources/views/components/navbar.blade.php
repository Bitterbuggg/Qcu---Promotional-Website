<nav class="z-50 border-b border-forest/30 bg-abyss/60">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center gap-2" aria-label="QCU Land Home">
        <img src="{{ asset('images/logoQCLand.png') }}" alt="QCU Land Logo" class="h-10 w-auto select-none" loading="lazy">
      </a>

      <!-- Desktop navigation -->
      <div class="hidden lg:flex items-center gap-8">
        <!-- About menu -->
        <div class="relative group" aria-haspopup="true">
          <a href="{{ route('about.index') }}" class="text-parchment/90 hover:text-gold px-2 py-1 inline-block" aria-expanded="false">About</a>
          <div class="absolute left-0 top-full min-w-[240px] rounded-md border border-forest/40 bg-abyss p-2 shadow-xl transition-all duration-150 ease-out opacity-0 scale-95 pointer-events-none group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:scale-100 group-focus-within:pointer-events-auto">
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('about.synopsis') }}">Game Synopsis</a>
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('about.chapters') }}">Chapter Synopsis</a>
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('about.characters') }}">Characters</a>
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('about.map') }}">QCU Land Map</a>
          </div>
        </div>

        <!-- Gameplay menu -->
        <div class="relative group" aria-haspopup="true">
          <a href="{{ route('gameplay.index') }}" class="text-parchment/90 hover:text-gold px-2 py-1 inline-block" aria-expanded="false">Gameplay</a>
          <div class="absolute left-0 top-full min-w-[240px] rounded-md border border-forest/40 bg-abyss p-2 shadow-xl transition-all duration-150 ease-out opacity-0 scale-95 pointer-events-none group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:scale-100 group-focus-within:pointer-events-auto">
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('gameplay.link') }}">Game Hyperlink</a>
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('gameplay.preview') }}">Game Preview</a>
            <a class="block px-3 py-2 hover:bg-forest/30 rounded" href="{{ route('gameplay.mechanics') }}">Game Mechanics</a>
          </div>
        </div>

        <a class="text-parchment/90 hover:text-gold" href="{{ route('news.index') }}">News & Updates</a>
        <a class="text-parchment/90 hover:text-gold" href="{{ route('team.index') }}">The Team</a>
        <!-- Theme toggle (sun/moon icons) -->
        <button type="button" id="themeToggle" class="p-2 rounded border border-forest/40 hover:border-gold transition" aria-label="Toggle dark mode">
          <svg id="themeIconDesktop" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <g class="icon-sun">
              <circle cx="12" cy="12" r="5" />
              <path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
            </g>
            <g class="icon-moon hidden">
              <path d="M12 3a9 9 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </g>
          </svg>
        </button>
      </div>

      <!-- Mobile controls -->
      <div class="flex items-center gap-3">
        <button type="button" id="themeToggleMobile" class="lg:hidden p-2 rounded border border-forest/40 text-parchment hover:text-gold" aria-label="Toggle dark mode">
          <svg id="themeIconMobile" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <g class="icon-sun">
              <circle cx="12" cy="12" r="6" />
              <path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
            </g>
            <g class="icon-moon hidden">
              <path d="M12 3a9 9 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </g>
          </svg>
        </button>
        <button class="lg:hidden p-2 rounded border border-forest/40 text-parchment hover:text-gold" data-toggle="mobile-menu" aria-label="Toggle Navigation">
        <!-- Hamburger icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
        </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="lg:hidden hidden border-t border-forest/30" data-target="mobile-menu">
    <div class="space-y-1 px-4 py-3">
      <a class="block px-3 py-2 rounded hover:bg-forest/30" href="{{ route('about.index') }}">About</a>
      <div class="pl-3">
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('about.synopsis') }}">Game Synopsis</a>
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('about.chapters') }}">Chapter Synopsis</a>
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('about.characters') }}">Characters</a>
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('about.map') }}">QCU Land Map</a>
      </div>
      <a class="block px-3 py-2 rounded hover:bg-forest/30" href="{{ route('gameplay.index') }}">Gameplay</a>
      <div class="pl-3">
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('gameplay.link') }}">Game Hyperlink</a>
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('gameplay.preview') }}">Game Preview</a>
        <a class="block px-3 py-1 rounded hover:bg-forest/30" href="{{ route('gameplay.mechanics') }}">Game Mechanics</a>
      </div>
      <a class="block px-3 py-2 rounded hover:bg-forest/30" href="{{ route('news.index') }}">News & Updates</a>
      <a class="block px-3 py-2 rounded hover:bg-forest/30" href="{{ route('team.index') }}">The Team</a>
    </div>
  </div>
</nav>
