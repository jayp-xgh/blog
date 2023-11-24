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
            <img src="/img/arrow.svg" alt="">
        </a>
        @auth
        <a href="{{ route('articles.create') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-green-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Publicar novo artigo
        </a>
        @endauth
    </header>

    <ol class="relative h-1/2 border-l border-gray-200 dark:border-gray-700">

        @if (count($articles) > 0)
            @foreach ($articles as $article)
            
            <li class="mb-10 ml-6">
                <a class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                    <svg class="text-blue-800 w-2.5 h-2.5 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </a>
                
                <a href="{{ route('articles.show', $article->id) }}" lass="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                    <h1 class="mb-4 text-1xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-2xl dark:text-white">{{ $article->title }}</h1>
                
                    <br>
                    <time class="mb-2 block text-md font-normal leading-none text-gray-400 dark:text-gray-500">Publicado em {{ $article->created_at }}</time>

                    <br>
                    <img src="{{ asset('img/articles/' . $article->image) }}" width="500px">
                </a>
                <br>

                @auth
                <div class="flex gap-[10px]">
                    <a href="{{ route('articles.edit', $article->id) }}" class="mr-2 ml-3 rounded bg-[#1b1e2c] border-solid border-2 border-gray-400 text-sm font-medium text-gray-400 px-2.5 py-0.5 hover:opacity-75">
                        editar
                    </a>
                    <form method="post" action="{{ route('articles.destroy', $article->id) }}">
                        @method('delete')
                        @csrf
                        <button onclick="deleteConfirm(event)"  class="mr-2 ml-3 rounded bg-[#1b1e2c] border-solid border-2 border-red-600 text-sm font-medium text-red-600 px-2.5 py-0.5 hover:opacity-75">
                            excluir
                        </button>
                    </form>
                </div>
                @endauth
            </li>
            @endforeach
        @endif
    </ol>

    <script>
        window.deleteConfirm = function (e) {
            e.preventDefault();
            var form = e.target.form;
            if(confirm('Deseja realmente excluir este artigo?')){
                form.submit();
            }
        }

    </script>
</body>
</html>
