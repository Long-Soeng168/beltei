<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('client.home');
// });
use Illuminate\Support\Facades\File;

Route::get('/get_resources/{path?}', function ($path = null) {
    // dd($path);
    // Specify the directory path relative to the public folder
    if($path ){
        $directory = public_path($path);
    }else{
        $directory = public_path();
    }

    // Check if the directory exists
    if (File::isDirectory($directory)) {
        // Get all files in the current directory (excluding subdirectories)
        $files = File::files($directory);

        // Get all directories (subdirectories) in the directory
        $directories = File::directories($directory);

        // Initialize arrays to store file names and folder names
        $fileNames = [];
        $folderNames = [];

        // Iterate through files and store file names
        foreach ($files as $file) {
            $fileNames[] = $file->getFilename();
        }

        // Iterate through directories and store folder names
        foreach ($directories as $dir) {
            $folderNames[] = basename($dir); // Get the base name of the directory
        }

        // Return the list of filenames and folder names as JSON response
        // return response()->json(['files' => $fileNames, 'folders' => $folderNames]);
        return view('view-files',['files' => $fileNames, 'folders' => $folderNames]);
    } else {
        // Handle case where directory does not exist
        abort(404, 'Directory not found');
    }
})->where('path', '.*');




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
