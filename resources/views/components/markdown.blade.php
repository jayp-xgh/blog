<div class="col-span-full">
    <label for="document" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Document</label>
    <div class="mt-2">
        <textarea
            id="document"
            name="document"
            rows="{{ isset($rows) ? $rows : 10 }}"
            value="{{ isset($article->document) ? $article->document : '' }}"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-[#1b1e2c] dark:text-white pl-5"
            >{{ isset($article->document) ? $article->document : '' }}
    </textarea>
    </div>
    <p class="mt-3 text-sm leading-6 text-gray-900 dark:text-white">Don't forget to cite the references.</p>
</div>

<script>
    ClassicEditor
    .create( document.querySelector('#document'))
    .catch( error => {
        console.error( error );
    } );
</script>
