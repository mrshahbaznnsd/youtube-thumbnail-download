<?php

namespace App\Livewire;

use Livewire\Component;

class YoutubeSearch extends Component
{
    public $youtubeUrl;
    public $thumbnailUrl = 'https://thumbnailify.com/img/1280x720.webp';
    public  $thumbnailUrl2 = 'https://thumbnailify.com/img/640x480.webp';
    public  $thumbnailUrl3  = 'https://thumbnailify.com/img/480.webp';
    public  $thumbnailUrl4  = 'https://thumbnailify.com/img/320.webp';
    public  $thumbnailUrl5 = 'https://thumbnailify.com/img/120.webp';

    public  $errorMessage;
    public function fetchThumbnail()
    {
        // Extract video ID from URL
        preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/]+\/.*|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $this->youtubeUrl, $matches);

        if (isset($matches[1])) {
            $videoId = $matches[1];
            $this->thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
            $this->thumbnailUrl2 = "https://img.youtube.com/vi/{$videoId}/sddefault.jpg";
            $this->thumbnailUrl3 = "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
            $this->thumbnailUrl4 = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";
            $this->thumbnailUrl5 = "https://img.youtube.com/vi/{$videoId}/default.jpg";
            $this->errorMessage = null;
        } else {
            $this->thumbnailUrl =  'https://thumbnailify.com/img/1280x720.webp';
            $this->thumbnailUrl2 = 'https://thumbnailify.com/img/640x480.webp';
            $this->thumbnailUrl3 = 'https://thumbnailify.com/img/480.webp';
            $this->thumbnailUrl4 = 'https://thumbnailify.com/img/320.webp';
            $this->thumbnailUrl5 = 'https://thumbnailify.com/img/120.webp';
            $this->errorMessage = 'Invalid YouTube URL';
        }
    }


    public function render()
    {
        return view('livewire.youtube-search');
    }
}
