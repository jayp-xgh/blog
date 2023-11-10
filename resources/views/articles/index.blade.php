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

    @if ($messege = Session::get('success'))
        <div id="toast-notification" class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300 absolute top-10 left-10 " role="alert">
            <div class="flex items-center mb-3">
                <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Nova notificação</span>
                <button type="button" onclick="closeToast()" class="ml-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-notification" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <div class="flex items-center">
                <div class="relative inline-block shrink-0">
                    <img class="w-12 h-12 rounded-full" src="/img/jayp.png" alt="Jayp na imagem"/>
                    <span class="absolute bottom-0 right-0 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full">
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                            <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
                            <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
                            </svg>
                        <span class="sr-only">Message icon</span>
                    </span>
                </div>
                <div class="ml-3 text-sm font-normal">
                    <div class="text-sm font-semibold text-gray-900 dark:text-white">Jayp</div>
                    <div class="text-sm font-normal">Artigos atualizados com sucesso</div> 
                    <span class="text-xs font-medium text-blue-600 dark:text-blue-500">Alguns segundos atrás</span>   
                </div>
            </div>
        </div>
    @endif 

    <header class="absolute top-10 right-10 h-16 p-10  flex justify-between items-center gap-10">
        <a href="/" class="color-[#fff]">
            <img src="/img/arrow.svg" alt="">
        </a>
        <a href="{{ route('articles.create') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-green-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Publicar novo artigo
        </a>
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
                </a>
                <br>
                <time class="mb-2 block text-md font-normal leading-none text-gray-400 dark:text-gray-500">Publicado em {{ $article->created_at }}</time>

                <br>
                <img src="{{ asset('img/articles/' . $article->image) }}" width="500px">
                <br>

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

        function closeToast() {
            var toast = document.getElementById('toast-notification');
            toast.style.display = 'none';
        }
    </script>
</body>
</html>
