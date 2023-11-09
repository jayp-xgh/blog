<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderby('created_at', 'desc')->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required',
        //     'title' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title' => 'required',
        //     'title' => 'required',
        // ]);


        $article = new Article;
     
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
 
        $article->title = $request->title;
        $article->document = $request->document;
        $article->source = $request->source;
        $article->image = $file_name;


        $article->save();
        
        return redirect()->route('articles.index')->with('success', 'Article added successfully.');
    }
}
