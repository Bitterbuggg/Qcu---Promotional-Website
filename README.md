## QCU — Promotional Website (Laravel 11 + TailwindCSS)

Dark fantasy promotional website inspired by Elden Ring’s aesthetic. Built with Laravel 11, Blade components, TailwindCSS v4, and optional GSAP/ScrollReveal animations.

### Requirements
- PHP 8.2+
- Composer
- Node.js 18+
- Enable PHP extension: fileinfo

### First-time Setup
1) Ensure `extension=fileinfo` is enabled in your `php.ini` (CLI). On Windows PowerShell:

```pwsh
php --ini
# Open the listed php.ini and ensure: extension=fileinfo
```

2) Install PHP dependencies (Laravel 11 pinned):

```pwsh
composer install
```

If you cannot enable `fileinfo` yet, you can do a temporary install ignoring the platform requirement (not recommended long-term):

```pwsh
composer install --ignore-platform-req=ext-fileinfo
```

3) Create environment and app key:

```pwsh
Copy-Item .env.example .env -ErrorAction Ignore
php artisan key:generate
```

4) Install Node packages:

```pwsh
npm install
```

### Run (development)
In two terminals, or use the Composer dev script that runs both:

```pwsh
# Terminal A
php artisan serve

# Terminal B
npm run dev

# OR single command via concurrently (Composer):
composer run dev
```

Open http://127.0.0.1:8000

### Assets
- Tailwind v4 configured via `@tailwindcss/vite` plugin
- Theme and colors defined in `resources/css/app.css` with `@theme`
- Optional animations: ScrollReveal and GSAP loaded in `resources/js/app.js`

### Sitemap Routes
- Home: `/`
- About: `/about` → Synopsis `/about/synopsis`, Chapters `/about/chapters`, Characters `/about/characters`, Map `/about/map`
- Gameplay: `/gameplay` → Link `/gameplay/link`, Preview `/gameplay/preview`, Mechanics `/gameplay/mechanics`
- News & Updates: `/news` (list), `/news/{slug}` (optional detail)
- The Team: `/team`

### Images
Place your assets in `public/images`.
- Hero: `/images/hero.jpg`
- Characters: `/images/characters/*.jpg`
- Team: `/images/team/*.jpg`
- Map (sitemap image): `/images/sitemap.png`

### Notes
- Uses Blade components for Navbar, Footer, Hero, Cards, and Accordion.
- Tailwind breakpoints are defaults: base (0–639), sm (640+), md (768+), lg (1024+), xl (1280+), 2xl (1536+).
- Navbar collapses on base→sm; dropdowns appear at lg+.

### Backend Simplified
This promotional site has no user accounts, queues, or dynamic database tables. User/auth models, migrations (users, cache, jobs), and factories were removed. Queue runs in `sync` mode only.
Database config now uses an in-memory sqlite connection (`:memory:`). You can safely ignore `php artisan migrate` commands.
