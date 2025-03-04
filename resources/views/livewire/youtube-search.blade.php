<div>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">



<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-gradient-to-br from-purple-700 via-pink-600 to-red-500">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center space-y-4 text-center">
                <div class="space-y-2">
                    <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl md:text-6xl lg:text-7xl/none">
                        YouTube Thumbnail
                        <span class="block text-yellow-300">Downloader</span>
                    </h1>
                    <p class="mx-auto max-w-[700px] text-white/80 md:text-xl lg:text-2xl">
                        Grab stunning thumbnails in seconds with Thumbnailify. Elevate your content game!
                    </p>
                    @if($errorMessage)
                    <p class="mx-auto max-w-[700px] text-white/80 md:text-xl lg:text-2xl">
                        {{ $errorMessage }}
                    </p>
                    @endif
                </div>
                <div class="w-full max-w-sm space-y-2">
                    <form class="relative">
                        <input
                            class="w-full pl-4 pr-20 py-3 text-black rounded-full border-2 border-white/20 bg-white/10 backdrop-blur-sm placeholder:text-white/50 focus:border-yellow-300 transition-all duration-300 url-input"
                            placeholder="Paste YouTube URL" type="url" wire:model="youtubeUrl" required>
                        <button type="button" wire:click="fetchThumbnail"
                            class="absolute right-1 top-1 rounded-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 transition-all duration-300 flex items-center fetch-button">
                            Fetch
                            <i data-lucide="chevron-right" class="ml-2 h-4 w-4"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </section>


    {{-- <section class="w-full py-12 md:py-24 lg:py-32 bg-black">
    <div class="container mx-auto px-4 md:px-6">
        <!-- Advertisement Section -->
        <div class="flex justify-center items-center">
            <div class="w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl">
                <img src="https://via.placeholder.com/300x200" alt="Advertisement" class="w-full h-auto">
            </div>
        </div>
    </div>
</section> --}}

    <section class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-black to-purple-900">
        <div class="container mx-auto px-4 md:px-6">
            <h2
                class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Thumbnails Preview
            </h2>
            <div class="grid grid-cols-1 gap-8 items-start">
                @if ($thumbnailUrl)
                    <div
                        class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.02] transition-all duration-300">
                        <div class="p-1">
                            <img alt="YouTube thumbnail highest quality"
                                class="aspect-video object-cover w-full rounded-xl"
                                src="{{ $thumbnailUrl }}">
                            <a href="{{ $thumbnailUrl }}"
                            download="{{ $thumbnailUrl }}" target="_blank" class="mt-4 w-full bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white rounded-xl py-6 text-lg font-semibold transition-all duration-300 inline-block text-center">
                                <i data-lucide="download" class="inline-block mr-2 h-5 w-5"></i>
                                Download Highest Quality (1280x720)
                            </a>
                        </div>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @if ($thumbnailUrl2)
                    <div
                        class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                        <div class="p-1">
                            <img alt="YouTube thumbnail high (640x480)"
                                class="aspect-video object-cover w-full rounded-xl"
                                src="{{ $thumbnailUrl2 }}">
                            <a href="{{ $thumbnailUrl2 }}" download="{{ $thumbnailUrl2 }}" target="_blank"
                                class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                                <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                                Download High (640x480) </a>
                        </div>
                    </div>
                    @endif
                    @if ($thumbnailUrl3)
                    <div
                        class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                        <div class="p-1">
                            <img alt="YouTube thumbnail medium (480x360)"
                                class="aspect-video object-cover w-full rounded-xl"
                                src="{{ $thumbnailUrl3 }}">
                            <a href="{{ $thumbnailUrl3 }}" download="{{ $thumbnailUrl3 }}" target="_blank"
                                class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                                <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                                Download Medium (480x360) </a>
                        </div>
                    </div>
                    @endif
                    @if ($thumbnailUrl4)
                    <div
                        class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                        <div class="p-1">
                            <img alt="YouTube thumbnail standard (320x180)"
                                class="aspect-video  w-full rounded-xl"
                                src="{{ $thumbnailUrl4 }}">
                            <a href="{{ $thumbnailUrl4 }}" download="{{ $thumbnailUrl4 }}" target="_blank"
                                class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                                <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                                Download Standard (320x180) </a>
                        </div>
                    </div>
                    @endif
                    @if ($thumbnailUrl5)
                    <div
                        class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                        <div class="p-1">
                            <img alt="YouTube thumbnail low (120x90)"
                                class="aspect-video  w-full rounded-xl"
                                src="{{ $thumbnailUrl5 }}">
                                <a href="{{ $thumbnailUrl5 }}" download="{{ $thumbnailUrl5 }}" target="_blank"
                                class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                                <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                                Download Standard (120x90) </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>





    <section class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-black to-purple-900">
        <div class="container mx-auto px-4 md:px-6">
            <h2
                class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Download YouTube Thumbnails in High Quality with Thumbnailify
            </h2>
            <div class="prose prose-invert mx-auto">
                <p class="text-white/80 mb-6">
                    Thumbnailify is the go-to solution for anyone looking to download YouTube thumbnails quickly and
                    effortlessly. With our tool, you can grab high-quality thumbnails from any YouTube video,
                    ensuring that you always get the perfect image for your needs. Whether you're a content creator
                    needing the highest resolution or just someone who wants a simple way to save a thumbnail,
                    Thumbnailify has you covered.
                </p>

                <p class="text-white/80 mb-6">
                    Our tool supports multiple quality options, allowing users to download the best available
                    resolution in just one click. You don't need to worry about complicated processes or limited
                    access—<strong><a href="https://thumbnailify.com"
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Thumbnailify.com</a></strong>
                    is free to use forever, designed by a creator, for creators. This ensures that you get exactly
                    what you need without any hassle.
                </p>


                <p class="text-white/80 mb-6">
                    Using Thumbnailify is straightforward and works seamlessly across all devices. Whether you're on
                    a computer, tablet, or smartphone, you can download any YouTube video thumbnail instantly. The
                    user-friendly interface is optimized for quick access, making the process as smooth as possible.
                </p>
                <p class="text-white/80 mb-6">
                    Our tool not only supports downloading thumbnails but also functions as a reliable thumbnail
                    grabber, helping you to extract thumbnails from any YouTube video effortlessly. This feature is
                    perfect for those who need quick access to high-quality images for their projects or social
                    media posts.
                </p>
                <p class="text-white/80">
                    At Thumbnailify, we believe in providing tools that empower creators. That's why our platform is
                    entirely free and accessible to everyone. We're committed to helping you download YouTube
                    thumbnails with ease, making it the best choice for anyone looking to enhance their content
                    creation process.
                </p>
                <h2
                    class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">
                    How to Save Youtube Thumbnails?
                </h2>
                <p class="text-white/80">
                    Downloading YouTube thumbnails can be frustrating, and it's difficult to get the thumbnail in
                    the quality and size you need. But with Thumbnailify, you can save YouTube thumbnails according
                    to your needs in just 4 simple steps.
                </p>

                <ol class="list-decimal list-inside space-y-2 text-white">
                    <li class="font-medium">
                        Copy the video link from
                        <a href="https://www.youtube.com" target="_blank"
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">YouTube</a>.
                    </li>
                    <li class="font-medium">Paste the copied link on Thumbnailify and click the "Fetch" button.
                    </li>
                    <li class="font-medium">Choose the thumbnail quality you want to download.</li>
                    <li class="font-medium">Click the "YouTube Thumbnail Download" button, and you're all set!</li>
                </ol>

                <img src="https://thumbnailify.com/img/thumbnailify_download.webp" alt="Thumbnailify download process"
                    class="mt-4 mx-auto rounded-lg">




            </div>
        </div>
    </section>

    <section id="features" class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-black to-purple-900">
        <div class="container mx-auto px-4 md:px-6">
            <h2
                class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">
                Supercharged Features
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="zap" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">Lightning Fast</h3>
                        <p class="text-white/70">Get your thumbnails in milliseconds</p>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="shield" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">100% Secure</h3>
                        <p class="text-white/70">Your data is always protected</p>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="sparkles" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">High-Quality</h3>
                        <p class="text-white/70">Crystal clear images, always</p>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="smartphone" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">Mobile Friendly</h3>
                        <p class="text-white/70">Works perfectly on all devices</p>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="clock" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">24/7 Availability</h3>
                        <p class="text-white/70">Download anytime, anywhere</p>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <i data-lucide="gift" class="h-12 w-12 mb-4 text-yellow-400"></i>
                        <h3 class="text-xl font-bold mb-2 text-white">Completely Free</h3>
                        <p class="text-white/70">No hidden costs, ever</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-purple-900 to-black">
        <div class="container mx-auto px-4 md:px-6">
            <h2
                class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-yellow-400">
                Frequently Asked Questions
            </h2>
            <div class="w-full max-w-3xl mx-auto space-y-4">
                <div class="border-b border-white/10">
                    <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleFAQ(0)">
                        <span class="text-white hover:text-yellow-400 transition-colors">How do I download a
                            YouTube thumbnail?</span>
                        <i data-lucide="chevron-down" class="h-5 w-5 transform transition-transform duration-200"></i>
                    </button>
                    <div id="faq-0" class="hidden pb-4">
                        <p class="text-white/70">Simply paste the YouTube video URL into the input box and click
                            'Fetch'. You'll then see various thumbnail options to download.</p>
                    </div>
                </div>
                <div class="border-b border-white/10">
                    <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleFAQ(1)">
                        <span class="text-white hover:text-yellow-400 transition-colors">Is this service
                            free?</span>
                        <i data-lucide="chevron-down" class="h-5 w-5 transform transition-transform duration-200"></i>
                    </button>
                    <div id="faq-1" class="hidden pb-4">
                        <p class="text-white/70">Yes, our YouTube Thumbnail Downloader is completely free to use.
                        </p>
                    </div>
                </div>
                <div class="border-b border-white/10">
                    <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleFAQ(2)">
                        <span class="text-white hover:text-yellow-400 transition-colors">What thumbnail resolutions
                            are available?</span>
                        <i data-lucide="chevron-down" class="h-5 w-5 transform transition-transform duration-200"></i>
                    </button>
                    <div id="faq-2" class="hidden pb-4">
                        <p class="text-white/70">We offer thumbnails in five resolutions: highest quality
                            (1280x720), high quality (640x480), medium quality (480x360), standard quality
                            (320x180), and low quality (120x90).</p>
                    </div>
                </div>
                <div class="border-b border-white/10">
                    <button class="flex justify-between items-center w-full py-4 text-left" onclick="toggleFAQ(3)">
                        <span class="text-white hover:text-yellow-400 transition-colors">Can I download thumbnails
                            from any YouTube video?</span>
                        <i data-lucide="chevron-down" class="h-5 w-5 transform transition-transform duration-200"></i>
                    </button>
                    <div id="faq-3" class="hidden pb-4">
                        <p class="text-white/70">Yes, you can download thumbnails from any public YouTube video.
                            Private or unlisted videos are not supported.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



</div>
