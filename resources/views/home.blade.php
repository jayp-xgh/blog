<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>About</title>
</head>
<body class="bg-[#1b1e2c]">
    <div class="flex items-center justify-center  h-[300px] flex-col gap-5">
        <img src="img/jayp.png" alt="foto de perfil" class="w-28 rounded-full drop-shadow-xl">
        <nav>
            <ul class="flex items-center justify-between w-[150px] ">
                <li class="link-navbar w-[80px] text-center"><a href="#">Sobre</a></li>
                <li class="link-navbar w-[80px] text-center"><a href="{{ route('articles.index') }}">Artigos</a></li>
            </ul>
        </nav>
    </div>

    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-indigo-600">Sobre Mim</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">João Vitor P. Martins</h1>
                        <p class="mt-6 text-xl leading-8 text-gray-700">Desenvolvedor versátil capaz de resolver problemas. Minha experiência e conhecimento em diversas tecnologias e metodologias de desenvolvimento me permitem adaptar-me facilmente a diferentes projetos e ambientes de trabalho.</p>
                        <ul role="list" class="mt-8 space-y-2 text-gray-600">
                            <li><a href="https://www.linkedin.com/in/joao-pereira-7736b320b/" class="hover:text-indigo-600"><strong>LinkedIn:</strong> João Pereira</a></li>
                            <li><a href="https://github.com/jayp-xgh" class="hover:text-indigo-600"><strong>Github: </strong>Jayp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="img/github-jayp.png" alt="Imagem de perfil">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p><strong>Experiência:</strong></p>
                        <p>Turim - tempo integral - nov de 2022 - out de 2023 · 1 ano</p>
                        <p>
                            Trabalhei na área de sustentação, dando suporte para sistema legado em
                            PHP, JavaScript e framework próprio, aplicando boas práticas de Refatoração, TESTES, Clean Code, SOLID, Hexagonal, DDD e Design Patterns.
                        </p>
                        <br>
                        <p><strong>Formação:</strong></p>
                        <p>Desenvolvimento de sistemas (2020 - 2022) - ETEC: Dr. Emílio Hernandez Aguilar</p>
                        <p>Google Data Analytics (2022 - 2023)</p>
                        <p>
                            Bacharelado, ciência da computação (2023 - 2027) - Estácio de Sá
                        </p>
                        <br>
                        <p><strong>Idiomas:</strong></p>
                        <p>Inglês básico</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tecnologias</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Tecnologias que trabalhei em projetos OpenSource, Empresariais e Pessoais</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                <li>
                    <div class="flex items-center gap-x-6">
                       <img src="img/laravel.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Laravel</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/postgres.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Postgres</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/php.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">PHP</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/mysql.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">MySQL</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/adobeXD.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">AdobeXD</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/github.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Github | Git</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/tortoise.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Tortoise</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/linux.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Linux</h3>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/docker.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Docker</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/react.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">React</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="img/figma.svg" class="h-16 w-16">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Figma</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
