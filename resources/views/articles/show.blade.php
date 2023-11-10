<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Artigos</title>
    <style>
        h2 {
            font-size: 2rem;
            color: pink;
        }
    </style>
</head>
<body class="min-h-[100vh]  dark:bg-gray-900">
    <header class="absolute top-10 right-10 h-16 p-10  flex justify-between items-center gap-10 bg-blue">
        <a href="/articles/" class="color-[#fff]">
            <img src="/img/arrow.svg" alt="">
        </a>
    </header>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased flex flex-col justify-center items-center">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="/img/jayp.png" alt="João Pereira">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">João Pereira</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Desenvolvedor, Cientista da Computação & Entusiasta</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="{{ $article->created_at}}" title="February 8th, 2022"></time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $article->title }}</h1>
                </header>
            </article>
        </div>
        <div class=" w-[50%] pt-[100px] flex flex-col justify-center items-start text-base text-gray-500 dark:text-gray-400">
           {!! $article->document !!}
        </div>
    </main>
</body>
</html>
