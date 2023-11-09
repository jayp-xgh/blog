<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Artigos</title>
</head>
<body class="flex items-center justify-center min-h-[100vh] bg-[#1b1e2c] pt-[200px]">

        <header class="absolute top-10 right-10 h-16 p-10  flex justify-between items-center gap-10">
            <a href="/" class="color-[#fff]">
                <img src="img/arrow.svg" alt="">
            </a>
            <a href="{{ route('articles.create') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-green-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Publicar novo artigo
            </a>
        </header>
        

    <ol class="relative h-1/2 border-l border-gray-200 dark:border-gray-700">

        @if (count($articles) > 0)
            @foreach ($articles as $article)
            <li class="mb-10 ml-6">
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                    <svg class="text-blue-800 w-2.5 h-2.5 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </span>
                <a class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white" href="#">
                    {{ $article->title }}
                    {{-- <span class="mr-2 ml-3 rounded bg-blue-100 text-sm font-medium text-blue-800 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300">
                        último artigo
                    </span> --}}
                </a>
                <br>
                <time class="mb-2 block text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Publicado em {{ $article->created_at }}</time>
                <br>
                <img src="{{ asset('images/' . $article->image) }}" width="200px">
            </li>
            @endforeach
        @else

        @endif
    </ol>
</body>
</html>
