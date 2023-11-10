<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <title>Edit article</title>
</head>
<body class="flex items-center justify-center bg-[#1b1e2c] flex-col">

    
    <header class="absolute top-10 right-10 h-16 p-10  flex justify-between items-center gap-10">
        <a href="{{ route('articles.index') }}" class="mt-[100px]">
            <img src="/img/arrow.svg" alt="">
        </a>    
    </header>

    <form class="w-[50%] p-[100px]" method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-xl text-gray-900 dark:text-white">Edit Article</h1>
                <h2 class="mt-1  text-gray-900 dark:text-white">Hi Jayp, what are we going to change?</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Title</label>
                        <div class="mt-2">
                            <input id="title" name="title" type="text" required value="{{ $article->title }}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5">
                        </div>
                    </div>
                    
                    <x-markdown/>
                    {{-- <div class="col-span-full">
                        <label for="document" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Document</label>
                        <div class="mt-2">
                            <textarea 
                                id="document"
                                name="document"
                                rows="3" 
                                value="{{ $article->document }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5">{{ $article->document }}
                            </textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-900 dark:text-white">Don't forget to cite the references.</p>
                    </div> --}}
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="source" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white ">Source (optional)</label>
                    <input id="source" name="source" type="source" autocomplete="source" value="{{ $article->source }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5">
                </div>
            </div>

            <div class="sm:col-span-4 mt-8">
                <label for="image" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Image </label>
                <img src="{{ asset('img/articles/'.$article->image) }}" id="file-preview" width="500px" >
                <input type="hidden" name="hidden_article_image" value="{{ $article->image }}">
                <input type="file"  name="image" id="image" accept="image/*" onchange="showFile(event)" value="{{ $article->image }}" class="rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border-none" >
                {{-- <input type="file" id="image" name="image"  accept="image/*" onchange="showFile(event)" value="{{ $article->image }}" class="rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border-none" > --}}
            </div>

        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <input type="hidden" name="hidden_id" value="{{ $article->id }}">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Save</button>
        </div>
    </form>

    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            
            reader.onload = function () {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>
</html>
