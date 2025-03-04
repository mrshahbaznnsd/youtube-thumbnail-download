<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\YoutubeSearch;
use App\Livewire\Privacy;
use App\Livewire\Term;
use App\Livewire\Contact;

// make livewire component route youtube

Route::get('/', YoutubeSearch::class);
Route::get('/privacy', Privacy::class);
Route::get('/terms', Term::class);
Route::get('/contact', Contact::class);
