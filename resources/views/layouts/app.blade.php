<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'QCU LAND — A Dark Fantasy Journey' }}</title>
    <meta name="description" content="QCU LAND: An epic dark fantasy world with rich lore, deep gameplay, and evolving stories.">

    <!-- Apply theme early to avoid light-mode flash -->
    <script>/*<![CDATA[*/(function(){try{var m=localStorage.getItem('theme');if(!m){m=window.matchMedia('(prefers-color-scheme: dark)').matches?'dark':'light';}if(m==='dark'){document.documentElement.classList.add('dark');document.documentElement.style.colorScheme='dark';}else{document.documentElement.style.colorScheme='light';}}catch(e){}})();/*]]>*/</script>

    <!-- Fonts: Montserrat families for headings and body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Montserrat+Alternates:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-ink">
    <x-navbar />

    <main class="flex-1">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <x-footer />
    <!-- Optional: add /images/sitemap.png if used on pages -->
</body>
</html>
