<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex items-center justify-center bg-[#1b1e2c]">
    <form class="w-[50%] p-[100px]">
        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-xl text-gray-900 dark:text-white">New Article</h1>
                <h2 class="mt-1  text-gray-900 dark:text-white">Hello Jayp, what is the subject of today's article?</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Title</label>
                        <div class="mt-2">
                            <input id="title" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="document" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Document</label>
                        <div class="mt-2">
                            <textarea id="document" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-900 dark:text-white">Don't forget to cite the references.</p>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white ">Source (optional)</label>
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  bg-[#1b1e2c] dark:text-white pl-5">
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</body>
</html>
