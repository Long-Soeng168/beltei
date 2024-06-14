<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Explorer</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-8 bg-gray-100">
    <div class="max-w-3xl p-6 mx-auto bg-white rounded-lg shadow-lg">
        <ul>
            @foreach ($folders as $folder)
                <li class="mb-2">
                    <a href="{{ url()->current() . '/' . $folder }}" class="flex items-center text-blue-500 hover:underline">
                        <img class="w-6 h-6 mr-2" src="{{ asset('assets/icons/folder.png') }}" alt="">
                        {{ $folder }}
                    </a>
                </li>
            @endforeach
        </ul>
        <ul class="mb-6">
            @php
                $currentUrl = url()->current(); // Get the current URL
                $removedGetUrl = str_replace('/get_resources/', '/', $currentUrl); // Remove /get/ from the URL
            @endphp
            @foreach ($files as $file)
                <li class="mb-2">
                    <a href="{{ $removedGetUrl . '/' . $file }}" class="flex items-center text-blue-500 hover:underline">
                        <img class="w-6 h-6 mr-2" src="{{ asset('assets/icons/file.png') }}" alt="">
                        {{ $file }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
