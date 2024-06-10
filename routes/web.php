<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home');
});

Route::get('/publications', function () {
    return view('client.publications.index');
});
Route::get('/publications/detail', function () {
    return view('client.publications.show');
});

Route::get('/videos', function () {
    return view('client.videos.index');
});
Route::get('/videos/detail', function () {
    return view('client.videos.show');
});

Route::get('/audios', function () {
    return view('client.audios.index');
});
Route::get('/audios/detail', function () {
    return view('client.audios.show');
});

Route::get('/images', function () {
    return view('client.images.index');
});
Route::get('/images/detail', function () {
    return view('client.images.show');
});

Route::get('/news', function () {
    return view('client.news.index');
});
Route::get('/news/detail', function () {
    return view('client.news.show');
});



Route::get('publications/{id}', function () {
    return view('publication_detail');
});
