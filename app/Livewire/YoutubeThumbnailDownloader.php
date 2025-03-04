<?php

namespace App\Livewire;

use Livewire\Component;

class YoutubeThumbnailDownloader extends Component
{
    public $youtubeUrl;
    public $thumbnailUrl;
    public  $thumbnailUrl2;
    public  $thumbnailUrl3;
    public  $thumbnailUrl4;
    public  $thumbnailUrl5;

    public function fetchThumbnail()
    {
        dd($this->youtubeUrl);
        // Extract video ID from URL
        preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/]+\/.*|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $this->youtubeUrl, $matches);

        if (isset($matches[1])) {
            $videoId = $matches[1];
            $this->thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
            $this->thumbnailUrl2 = "https://img.youtube.com/vi/{$videoId}/sddefault.jpg";
            $this->thumbnailUrl3 = "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
            $this->thumbnailUrl4 = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";
            $this->thumbnailUrl5 = "https://img.youtube.com/vi/{$videoId}/default.jpg";

        } else {
            $this->thumbnailUrl = null;
            session()->flash('error', 'Invalid YouTube URL');
        }
    }


    public function render()
    {
        return view('livewire.youtube-thumbnail-downloader');
    }
}
