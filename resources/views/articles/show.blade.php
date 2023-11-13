<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Artigos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
        }
        h2, h3, p {
            padding-bottom: 15px; 
        }
        h1 {
            font-size: 2.25rem;
            font-weight: 800;
            color: #e9edf0;
            padding-bottom:56px ;
        }
        h2, h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
        }
        p {
            font-size: 1.5rem;
            color: #9ea9b6;
            line-height: 1.2;
        }
        strong {
            color: #619ce5;
            font-size: 1.5rem;
        }
        i {
            color: rgb(136, 193, 234);
        }
    </style>
</head>

<body class="min-h-[100vh]  dark:bg-gray-900">
    <x-go-back-button />
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased flex flex-col justify-center items-center">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl w-[100%]">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format" >
                    <address class="flex items-center mb-6 not-italic">
                        <div class="mr-3 text-sm text-gray-900 dark:text-white flex justify-center items-center">
                            <img class="mr-4 w-16 h-16 rounded-full" src="/img/jayp.png" alt="João Pereira">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">João Pereira</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Desenvolvedor, Cientista da Computação & Entusiasta</p>
                            </div>
                        </div>
                    </address>
                </header>
            </article>
        </div>
        <div
            class=" w-[50%] pt-[100px] flex flex-col justify-center items-start text-base text-gray-500 dark:text-gray-400">
            <h1 class="w-[100%]">{{ $article->title }}</h1>
            {!! $article->document !!}
        </div>
    </main>
</body>

</html>
