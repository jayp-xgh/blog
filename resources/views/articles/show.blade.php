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
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
        :root {
            --main-font: 'Merriweather', serif;
            --strong-color: #e96b32;
            --italic-color: #92c0dd;
            --heading-color: #fff;
            --heading-h2-h3-color: #71db8c;
            --paragraph-color: #768390;
            --background-color: #22272e;
            --text-color: #ffffff;
        }


        body {
            font-family: 'Roboto Mono', monospace;
        }
        body, main{
            background-color: var(--background-color);
        }

        strong {
            color: var(--strong-color);
            font-size: 1.3rem;
            line-height: 1.2;
        }

        i {
            color: var(--italic-color);
        }

        h1 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--heading-color);
            line-height: 1.5;
        }

        h2, h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--heading-h2-h3-color);
        }

        p, a{
            font-size: 1.2rem;
            color: var(--paragraph-color);
            line-height: 1.5;
        }
        h1,h2,h3,h4,h5,h6,p {
            padding-bottom: 10px;
        }

    </style>
</head>

<body class="min-h-[100vh]">
    <x-go-back-button />
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased flex flex-col justify-center items-center ">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl w-[100%]">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format" >
                    <address class="flex items-center mb-6 not-italic">
                        <div class="mr-3 text-sm text-gray-900 dark:text-white flex justify-center items-center">
                            <img class="mr-4 w-16 h-16 rounded-full" src="/img/jayp.png" alt="João Pereira">
                            <div>
                                <a href="../../" rel="author" class="text-xl font-bold ">João Pereira</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Desenvolvedor, Cientista da Computação & Entusiasta</p>
                            </div>
                        </div>
                    </address>
                </header>
            </article>
        </div>
        <div
            class=" w-[70%] pt-[100px] flex flex-col justify-center items-start text-base text-gray-500 dark:text-gray-400">
            <h1 class="w-[100%]">{{ $article->title }}</h1>
            {!! $article->document !!}
        </div>
    </main>
</body>

</html>
