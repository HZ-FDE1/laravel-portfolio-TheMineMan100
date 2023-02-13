<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}