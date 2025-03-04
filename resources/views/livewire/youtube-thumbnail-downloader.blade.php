<div class="p-6 bg-gray-100 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">YouTube Thumbnail Downloader</h2>

    <input type="text" class="w-full p-2 border rounded mb-4" wire:model="youtubeUrl" placeholder="Enter YouTube URL">
    <button class="px-4 py-2 bg-blue-600 text-white rounded" wire:click="fetchThumbnail">Get Thumbnail</button>


<section class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-black to-purple-900">
    <div class="container mx-auto px-4 md:px-6">
        <h2
            class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Thumbnails Preview
        </h2>
        <div class="grid grid-cols-1 gap-8 items-start">
            @if($thumbnailUrl2)
            <div
                class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.02] transition-all duration-300">
                <div class="p-1">
                    <img alt="YouTube thumbnail highest quality" class="aspect-video object-cover w-full rounded-xl"
                        src="https://thumbnailify.com/img/1280x720.webp">
                    <a href="downloader.php?quality=maxres&url="
                        class="mt-4 w-full bg-gradient-to-r from-pink-500 to-red-500 hover:from-pink-600 hover:to-red-600 text-white rounded-xl py-6 text-lg font-semibold transition-all duration-300 inline-block text-center">
                        <i data-lucide="download" class="inline-block mr-2 h-5 w-5"></i>
                        Download Highest Quality (1280x720)
                    </a>
                </div>
            </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-1">
                        <img alt="YouTube thumbnail high (640x480)" class="aspect-video object-cover w-full rounded-xl"
                            src="https://thumbnailify.com/img/640x480.webp">
                        <a href="downloader.php?quality=high&url="
                            class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                            <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                            Download High (640x480) </a>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-1">
                        <img alt="YouTube thumbnail medium (480x360)"
                            class="aspect-video object-cover w-full rounded-xl"
                            src="https://thumbnailify.com/img/480.webp">
                        <a href="downloader.php?quality=medium&url="
                            class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                            <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                            Download Medium (480x360) </a>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-1">
                        <img alt="YouTube thumbnail standard (320x180)"
                            class="aspect-video object-cover w-full rounded-xl"
                            src="https://thumbnailify.com/img/320.webp">
                        <a href="downloader.php?quality=standard&url="
                            class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                            <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                            Download Standard (320x180) </a>
                    </div>
                </div>
                <div
                    class="bg-white/5 border-0 rounded-2xl overflow-hidden transform hover:scale-[1.05] transition-all duration-300">
                    <div class="p-1">
                        <img alt="YouTube thumbnail low (120x90)" class="aspect-video object-cover w-full rounded-xl"
                            src="https://thumbnailify.com/img/120.webp">
                        <a href="downloader.php?quality=default&url="
                            class="mt-4 w-full bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-xl py-4 font-medium transition-all duration-300 inline-block text-center">
                            <i data-lucide="download" class="inline-block mr-2 h-4 w-4"></i>
                            Download Low (120x90) </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
