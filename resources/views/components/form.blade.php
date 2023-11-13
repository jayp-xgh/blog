<div class="custom-container">
    <h1 class="custom-heading">Edit Article</h1>
    <h2 class="custom-subheading">Hi Jayp, what are we going to change?</h2>


    <div class="sm:col-span-4 custom-input-container">
        <label for="title" class="custom-label">Title</label>
        <div class="mt-2">
            <input id="title" name="title" type="text" required value="{{ $title ?? '' }}" class="custom-input">
        </div>
    </div>

    <x-markdown-edition :document="$document ?? ''"/>

    <div class="sm:col-span-4 mt-8 custom-input-container">
        <label for="source" class="custom-label">Source (optional)</label>
        <input id="source" name="source" type="text" autocomplete="source" value="{{ $source ?? '' }}" class="custom-input">
    </div>

    <div class="sm:col-span-4 mt-8 custom-input-container">
        <label for="image" class="custom-label">Image</label>
        <img src="{{ isset($image) ? asset('img/articles/'.$image) : '' }}" id="file-preview" width="400px">
        <input type="file" name="image" id="image" accept="image/*" onchange="showFile(event)" class="custom-file-input">
    </div>


    <div class="mt-6 flex items-center justify-end gap-x-6">
        <input type="hidden" name="hidden_id" value="{{ $id ?? ''}}">
        <button type="submit" class="custom-button">Save</button>
    </div>
</div>

<script>
    function showFile(event) {
        var input = event.target;
        var reader = new FileReader();
        
        reader.onload = function () {
            document.getElementById('file-preview').src = reader.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
</script>
