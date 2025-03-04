<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Thumbnail Downloader (free) - Thumbnailify.com</title>
    <meta name="description" content="Thumbnailify is a free YouTube thumbnail downloader tool that lets you grab high-quality video thumbnails instantly. Effortlessly download any YouTube video thumbnail with just one click, perfect for creators needing fast, reliable access.">
    <meta name="author" content="Thumbnailify">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/lucide@0.244.0/dist/umd/lucide.min.js"></script>

    @livewireStyles
</head>
<header class="sticky top-0 z-50 w-full border-b border-white/10 bg-black">
    <div class="container mx-auto px-4">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center space-x-4">
                <i data-lucide="youtube" class="h-6 w-6 text-red-500"></i>
                <a href="/" class="font-bold text-lg">Thumbnailify</a>
            </div>
            <div class="flex items-center space-x-4">
                <button id="mobileMenuToggle" class="md:hidden text-white hover:text-red-400 transition-colors">
                    <i data-lucide="menu" class="h-5 w-5"></i>
                    <span class="sr-only">Toggle menu</span>
                </button>
                <nav id="desktopNav" class="hidden md:flex items-center space-x-6">
                    <a class="text-sm text-white hover:text-red-400 transition-colors" href="/">Home</a>
                    <a class="text-sm text-white/60 hover:text-red-400 transition-colors"
                        href="#features">Features</a>
                    <a class="text-sm text-white/60 hover:text-red-400 transition-colors" href="#faq">FAQs</a>
                    <button class="text-sm text-white hover:text-red-400 transition-colors">
                        <i data-lucide="globe" class="h-5 w-5"></i>
                        <span class="sr-only">Switch language</span>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</header>

<nav id="mobileNav" class="hidden md:hidden py-4 bg-black absolute left-0 right-0 top-16 border-b border-white/10">
    <div class="container mx-auto px-4">
        <a class="block py-2 text-sm text-white hover:text-red-400 transition-colors" href="/">Home</a>
        <a class="block py-2 text-sm text-white/60 hover:text-red-400 transition-colors"
            href="#features">Features</a>
        <a class="block py-2 text-sm text-white/60 hover:text-red-400 transition-colors" href="#faq">FAQs</a>
        <button class="block py-2 text-sm text-white hover:text-red-400 transition-colors">
            <i data-lucide="globe" class="h-5 w-5 inline-block mr-2"></i>
            <span>Switch language</span>
        </button>
    </div>
</nav>
<body class="flex flex-col min-h-screen bg-black text-white">
    {{ $slot }} <!-- This is where Livewire component content will be injected -->
    <footer class="w-full py-6 bg-black border-t border-white/10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4 md:px-6">
            <p class="text-sm text-white/60">© 2024 Thumbnailify.com. All rights reserved.</p>
            <nav class="flex gap-4 sm:gap-6 mt-4 md:mt-0">
                <a class="text-sm hover:text-yellow-400 transition-colors" href="/">Home</a>
                <a class="text-sm hover:text-yellow-400 transition-colors" href="/terms/">Terms</a>
                <a class="text-sm hover:text-yellow-400 transition-colors" href="/privacy/">Privacy</a>
                <a class="text-sm hover:text-yellow-400 transition-colors" href="/contact/">Contact</a>
            </nav>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        function toggleFAQ(index) {
            const content = document.getElementById(`faq-${index}`);
            const icon = content.previousElementSibling.querySelector('i');
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        document.getElementById('mobileMenuToggle').addEventListener('click', function() {
            const mobileNav = document.getElementById('mobileNav');
            mobileNav.classList.toggle('hidden');
            document.body.classList.toggle('mobile-menu-open');
        });
    </script>
    @livewireScripts
</body>

</html>
