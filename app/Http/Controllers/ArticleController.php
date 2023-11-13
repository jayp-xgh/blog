<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
    }
    public function index()
    {
        $articles = Article::orderby('created_at', 'desc')->get();
        return view('articles.index', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', ['article' => $article]);
    }
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $file_name = $article->image;

        if($request->image){
            @unlink(public_path('img/articles/'.$article->image));
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img/articles'), $file_name);
        }


        $article->title = $request->title;
        $article->document = $request->document;
        $article->source = $request->source;
        $article->image = $file_name;

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');

    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document' => 'required',
        ]);

        $article = new Article;
     
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img/articles'), $file_name);
 
        $article->title = $request->title;
        $article->document = $request->document;
        $article->source = $request->source;
        $article->image = $file_name;


        $article->save();
        return redirect()->route('articles.index')->with('success', 'Article added successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $image_path = public_path().'/img/articles/';
        $image = $image_path . $article->image;
        
        if(file_exists($image)){
           @unlink($image); 
        }
        
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
