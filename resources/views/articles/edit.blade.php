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
<body class="body-edit-create-show">
    <x-go-back-button/>
    <form class="w-[50%] p-[100px]" method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-form
            title="{{ $article->title }}"
            document="{!! $article->document !!}"
            source="{{ $article->source }}"
            image="{{ $article->image }}"
            id="{{ $article->id }}"
        />
</body>
</html>
